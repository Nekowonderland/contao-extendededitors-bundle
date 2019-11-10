window.addEvent('domready', function () {
    var eeb_time = null;
    window.addEvent('keyup:keys(shift)', function () {
        var today = new Date();
        var time = today.getHours()
            + today.getMinutes().toString().padStart(2, '0')
            + today.getSeconds().toString().padStart(2, '0')
            + today.getMilliseconds().toString().padStart(3, '0');
        time = time.toInt();

        if (eeb_time !== null && (time - eeb_time) < 200) {
            new SimpleModal({
                'width': 250,
                'hideFooter': true,
                'draggable': false,
                'overlayOpacity': .7,
                'onShow': function () {
                    document.body.setStyle('overflow', 'hidden');
                },
                'onHide': function () {
                    document.body.setStyle('overflow', 'auto');
                }
            }).show({
                "model": "modal-ajax",
                "title": "Title",
                "param":
                    {
                        "url": "/_be_eeb/search",
                        "onRequestComplete": function () {
                        }
                    }
            });
        }

        eeb_time = time;
    });
});