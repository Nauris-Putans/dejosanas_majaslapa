const trigger = '.trigger';
const list = '.list';

function toggleIt() {
    $(list).slideToggle(200, 'linear');
}

$(trigger).on('click', function () {
    toggleIt();
});