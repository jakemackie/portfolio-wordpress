#!/bin/bash
[ -f .env.local ] && export $(grep -v '^#' .env.local | xargs) || { echo "Error: .env.local missing."; exit 1; }

echo "🔄 Streaming Staging DB to Local..."

ssh -i "$REMOTE_SSH_KEY" "$REMOTE_USER@$REMOTE_HOST" \
"wp db export --path=$REMOTE_PATH --allow-root --stdout" | \
docker exec -i "$LOCAL_DB_CONTAINER" mariadb -u root -p"$DB_ROOT_PASS" "$DB_NAME"

docker exec -i "$LOCAL_PHP_CONTAINER" wp search-replace "$STAGING_URL" "$LOCAL_URL" --allow-root

echo "✅ Sync complete."