$(document).ready(function () {

    var animTime = 1000;
    var modal = $('#modal');

    var oldDiv = $('#modal');

    $('.someDiv').on('click', function (e) {
        if (oldDiv) {
            oldDiv.css('opacity', 1);
        }

        var jthis = $(this);
        modal.css({
            'top': jthis.offset().top,
            'left': jthis.offset().left,
            'width': jthis.width(),
            'height': jthis.height(),
            'background-color': jthis.css('background-color'),
            'opacity': 1,
            'display': 'block'
        });
        jthis.css('opacity', 0);
        var n = 0;
        modal
            .animate({'height': 400, 'width':400}, {
                duration: 1000,
                queue: false,
                specialEasing: {
                    height: 'linear',
                    width: 'swing'
                },
                complete: function () {
                    console.log("Animation finish");
                },
                step: function () {
                    console.log(n++);

                }
            })

            .animate({'top': (window.innerHeight - 400) / 2,
                    'left': (window.innerWidth - 400) / 2}, {
                specialEasing: {
                    height: 'linear',
                    width: 'swing'
                }
            });

        oldDiv = jthis;
    });

    $('#modal').on('click', function () {
       $(this).fadeOut(animTime);
       $('.someDiv').animate({'opacity': 1}, 2000);
    });
});