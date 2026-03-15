import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';

registerBlockType('jakemackie/card', {
    title: 'Card',
    category: 'widgets',
    attributes: {
        title: {
            type: 'string',
            default: '',
        },
    },
    edit: ({
        attributes,
        setAttributes,
    }: {
        attributes: { title: string };
        setAttributes: (attrs: Partial<{ title: string }>) => void;
    }) => {
        // By leaving this empty, WordPress handles the styles via theme.json
        const blockProps = useBlockProps();

        return (
            <div { ...blockProps }>
                <InspectorControls>
                    <PanelBody title="Card Settings">
                        <TextControl
                            label="Title"
                            value={ attributes.title }
                            onChange={ (val) => setAttributes({ title: val }) }
                        />
                    </PanelBody>
                </InspectorControls>

                <h3>{ attributes.title }</h3>
            </div>
        );
    },
    save: () => null,
});