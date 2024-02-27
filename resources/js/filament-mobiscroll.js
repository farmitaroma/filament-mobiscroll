import * as mobiscroll from '@mobiscroll/javascript'

export default function filamentMobiscroll() {
    // eslint-disable-next-line es5/no-shorthand-properties
    return {
        async init() {
            mobiscroll.setOptions({
                // locale,
                // theme
            });

            const resources = await (async () => await this.$wire.getResources())();

            var calendar = mobiscroll.eventcalendar(this.$el, {
                // drag,
                view: {
                    timeline: {
                        type: 'week',
                        size: 2,
                        startTime: '08:00',
                        endTime: '21:00',
                    },
                },

                resources: resources,

                onPageLoading: async (args, inst) => {
                    const events = await this.$wire.getEvents();

                    inst.setEvents(events);
                }
            });

            window.addEventListener('test', async () => {
                const events = await this.$wire.getEvents();

                calendar.setEvents(events);

                calendar.setOptions({
                    view: {timeline: {type: "month"}}
                })
            })

            /*mobiscroll.getJson(
                'https://trial.mobiscroll.com/daily-weekly-events/',
                function (events) {
                    calendar.setEvents(events);
                },
                'jsonp',
            );*/
        },
        // eslint-disable-next-line es5/no-template-literals
        markup: `<div id="demo-display-multiple-days-weeks-months"></div>`,
    }
};