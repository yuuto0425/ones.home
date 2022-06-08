const $trigger = document.getElementById('js-page-top');
let jsPagePosition = document.querySelectorAll('.js-page-position');

$trigger.addEventListener('click',(event) => {
    event.preventDefault();
    let $index = 0;
    const jsPosiLen = jsPagePosition.length;
    for( $index ; $index < jsPosiLen ; $index++ ){
        if($index < jsPosiLen) {
            jsPagePosition[$index];
        }else {


        }
    }
});