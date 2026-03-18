import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

registerBlockType('jakemackie/hero', {
    title: 'Hero',
    category: 'design',
    icon: 'columns',
    supports: {
        spacing: {
            padding: true,
            margin: true,
        },
        color: {
            background: true,
            text: true,
        },
    },
    attributes: {},
    edit: () => {
        const blockProps = useBlockProps();
        return (
            <div { ...blockProps }>
                <InnerBlocks
                    allowedBlocks={['core/columns']}
                    template={[
                        [
                            'core/columns',
                            {
                                style: {
                                    spacing: {
                                        margin: '0px'
                                    }
                                }
                            },
                            [
                                ['core/column', {}, [
                                    ['core/heading', { placeholder: 'Add heading...' }],
                                ]],
                                ['core/column', {}, [
                                    ['core/image', {}],
                                ]],
                            ]
                        ],
                    ]}
                    templateLock={false}
                />
            </div>
        );
    },
    save: () => {
        const blockProps = useBlockProps.save();
        return (
            <div { ...blockProps }>
                <InnerBlocks.Content />
            </div>
        );
    },
});
