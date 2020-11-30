<script src="./js/mmenu-light.js"></script>
<script>
var menu = new MmenuLight(
    document.querySelector('#menu'),
    'all'
);

var navigator = menu.navigation({
    // selectedClass: 'Selected',
    // slidingSubmenus: true,
    // theme: 'dark',
    title: ''
});

var drawer = menu.offcanvas({
    position: 'right'
});

const test = document.querySelector('a[href="#menu"]');
//	Open the menu.
document.querySelector('a[href="#menu"]')
    .addEventListener('click', evnt => {
        evnt.preventDefault();
        drawer.open();
    });
document.querySelector('a[href="#page"]')
    .addEventListener('click', evnt => {
        evnt.preventDefault();
        drawer.close();
    });
</script>