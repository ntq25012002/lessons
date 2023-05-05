$(function() {
    chosenInit()
})
function chosenInit(ele = '.sl_chosen') {
    $(ele).each(function() {
        let $this = $(this)
        if ($this.hasClass('day') || $this.hasClass('month') || $this.hasClass('year') || $this
            .hasClass('gender') || $this.hasClass('select_category_chosen')) {
            $this.chosen({
                "disable_search": true
            })
        } else {
            $this.chosen()
            var inputChosen = $this.parent().find('.chosen-search').find('input');
    
            // if(screen.width >= 1024) {
            //     inputChosen.prop('focus', false).blur()
    
            // }
            // if(!/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(navigator.userAgent||navigator.vendor||window.opera)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test((navigator.userAgent||navigator.vendor||window.opera).substr(0,4))) {
            //     inputChosen.prop('focus', false).blur()
            // }
            $this.on('chosen:showing_dropdown', function () {
                $(ele).not($this[0]).trigger('chosen:hiding_dropdown');
                inputChosen.prop('readonly', true);
                inputChosen.blur();
                $('select[multiple="multiple"]').each(function() {
                    $(this).multiselect('close');
                });
                $(ele).not($this[0]).trigger('chosen:hiding_dropdown');
            })
           
            $this.on('chosen:hiding_dropdown', function () { 
                $('.clear_text_chosen').hide()
                inputChosen.val('')
                inputChosen.prop('readonly', true);
                inputChosen.blur();
            })
            // $('body').on("click", '.chosen-search input', function() {
            //     inputChosen.removeAttr("readonly");
            //     inputChosen.focus();
            // })
            inputChosen.on("click mousedown touchstart", function() {
                $(this).removeAttr("readonly");
                $(this).focus();
            });
           
            inputChosen.attr('placeholder', 'Tìm kiếm');
            $this.parent().find('.chosen-search').css('position', 'relative')
            $this.parent().find('.chosen-search').append('<img class="position-absolute clear_text_chosen" style="display: none; right: 9px; top: 50%; transform: translate(-50%, -50%); cursor: pointer" src="/stores/images/page/close.svg" alt="">')
            inputChosen.keyup(function() {
                $(this).parent().children('.clear_text_chosen').show()
                if($(this).val() == '') {
                    $(this).parent().children('.clear_text_chosen').hide()
                }
            })
            $this.parent().find('.clear_text_chosen').on('click touchstart', function() {
                $(this).hide()
                $this.trigger('chosen:updated');
            })
        }
    })
}

function chosenInScrollElemFixed($csel, titleFontsize = '16px', paddingTitle = '10px 0', heightInputSearch = '32px') {
    $csel.addClass('chosen_scroll')
    $csel.on('chosen:showing_dropdown', function (evt, params) {
      $('input:focus').blur()
      $csel.parent().find('.chosen-container').click()
      // Access the element
      var $el = params.chosen.container;
      var el = $el[0];
      var style = el.style;
      var bc = el.getBoundingClientRect();
      
      // Save the original position and sizes
      $el.orig_sizes = {
        width: $el.width(),
        height: $el.height(),
        position: style.position,
        top: style.top,
        left: style.left,
        zIndex: style.zIndex
      };
      // Set where we want to position the element
      var new_sizes = $.extend({}, $el.orig_sizes);
      new_sizes.position = 'absolute';
      new_sizes.top = bc.top + window.pageYOffset;
      new_sizes.left = bc.left + window.pageXOffset;
      new_sizes.zIndex = 1112;
    
      // Placeholder to the original position, plus it keeps the correct size for the form
          var $elclone = $el.elclone = $el.clone();
      $elclone.find('.chosen-drop').remove();
      $el.before($elclone);
      
      // Set the new position and move the chosen box into the body
      $el.css(new_sizes);
      $el.find('.chosen-single').css('cssText', 'height: inherit !important')
      $el.find('.chosen-single span').css('cssText', 'font-size: '+titleFontsize+' !important; padding: '+paddingTitle+' !important')
      $el.find('.chosen-search input').css('cssText', 'height: '+heightInputSearch+' !important')
      $('body').append($el);
    
    });
    
    $csel.on('chosen:hiding_dropdown', function (evt, params) {
      
      // Move the chosen box back into its form, and remove the placeholder
      var $el = params.chosen.container;
      $el.css($el.orig_sizes);
      $el.elclone.before($el);
      $el.elclone.remove();

    });
}
window.mobileCheck = function() {
    let check = false;
    (function(a){})();
    return check;
};
