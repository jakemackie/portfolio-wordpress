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
        const blockProps = useBlockProps({
            style: { border: '1px solid #ccc', padding: '20px', borderRadius: '8px' }
        });

        return (
            <div { ...blockProps }>
                {/* The Sidebar Options */}
                <InspectorControls>
                    <PanelBody title="Card Settings">
                        <TextControl
                            label="Title"
                            value={ attributes.title }
                            onChange={ (val) => setAttributes({ title: val }) }
                        />
                    </PanelBody>
                </InspectorControls>

                {/* What you see in the editor canvas */}
                <h3>{ attributes.title }</h3>
            </div>
        );
    },
    // We leave save null because we are using PHP to render (Dynamic Block)
    save: () => null,
});