(function(blocks, element) {
    var el = element.createElement;
    var {
        __
    } = window.wp.i18n;
    var {
        SelectControl,
        Panel,
        PanelBody,
        PanelRow
    } = window.wp.components;
    var {
        Fragment
    } = element;
    var {
        InspectorControls
    } = window.wp.editor;


    var blockStyle = {
        style: {
            backgroundColor: '#900',
            color: '#fff',
            padding: '20px',
        }
    };

    blocks.registerBlockType('build-a-house/expences', {
        title: __('Expences', 'build-a-house'),
        description: __('Show expences from selected period.', 'build-a-house'),
        icon: 'money-alt',
        category: 'build-a-house',
        attributes: {
            kind: {
                type: 'string',
                default: 'all',
            },
        },
        edit: (props) => {
            return el(
                Fragment, {},
                el(InspectorControls, {},
                    el(
                        PanelBody, {
                            title: __('Expences Settings', 'build-a-house'),
                            initialOpen: true
                        },

                        /* Text Field */
                        el(
                            PanelRow, {},
                            el(
                                SelectControl, {
                                    label: __('Period:', 'build-a-house'),
                                    onChange: (value) => {
                                        props.setAttributes({
                                            kind: value
                                        });
                                    },
                                    options: [{
                                        value: 'all',
                                        label: __('All data', 'build-a-house')
                                    }, {
                                        value: 'this-year',
                                        label: __('This year', 'build-a-house')
                                    }, {
                                        value: 'this-month',
                                        label: __('This month', 'build-a-house')
                                    }, {
                                        value: 'last-7-days',
                                        label: __('Last 7 days', 'build-a-house')
                                    }, ],
                                    value: props.attributes.kind
                                }
                            )
                        ),
                    ),
                ),
                /*
                 * Here will be your block markup
                 */
                el(
                    'div',
                    blockStyle,
                    el(
                        'p',
                        null,
                        __('Configure block on sidebar.', 'build-a-house'),
                    ),
                ),

            )
        },
        save: function(props) {
            return el(
                'div', {
                    'data-kind': props.attributes.kind,
                }
            );
        }
    })
})(window.wp.blocks, window.wp.element);

/*
 
 */
