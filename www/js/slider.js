function FeedbackSliderObject (){
    var sliderUL = $('.block_feedback_slider').css('overflow', 'hidden').children('ul'),
        lis = sliderUL.find('li'),
        lisWidth = 550,
        lisLen = lis.length,
        current = 1,
        direction = 'slide',
        this_ = this,
        skip_timer = false,
        timer_handle,
        isplay = true,
        totalLisWidth = lisLen * lisWidth;

    if(sliderUL.find('li').length > 2){
        this.slide_image = function(){
            var loc = lisWidth;

            if(direction == 'next'){
                ++current;
            } else {
                --current;
            }

            if(current === 0){
                current = lisLen - 1;
                loc = totalLisWidth - (lisWidth * 2);
                direction = 'next';
            } else if(current === lisLen){
                current = 1;
                loc = 0;
            }

            transition(sliderUL, loc, direction);
        };

        $('.slider')
            .on('mousemove', function(){
                isplay = false;
                skip_timer = true;
            })
            .on('mouseout', function(){
                isplay = true;
                skip_timer = true;
            });

        $('.control_previous_slide').on('click', function() {
            direction = 'prev';
            this_.slide_image();
            skip_timer = true;
        });

        $('.control_next_slide').on('click', function() {
            direction = 'next';
            this_.slide_image();
            skip_timer = true;
        });

        timer_handle = setInterval(function(){
            if(!skip_timer && isplay){
                direction = 'next';
                this_.slide_image();
            }
            skip_timer = false;
        }, 4000);

        function transition(container, loc, direction) {
            var unit;

            if (direction && loc !== 0) {
                unit = (direction === 'prev') ? '+=' : '-=';
            }

            container.animate({
                'margin-left': unit ? (unit + loc) : loc
            });
        }
    }
}
