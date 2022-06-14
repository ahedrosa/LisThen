var modalDelete = document.querySelector('#modalDelete');
var deleteSpan = document.getElementById('deleteSpan');
var modalAdd = document.querySelector('#addDelete');
var addSpan = document.getElementById('addSpan');

function deletes(name, dataurl) {

    deleteSpan.innerHTML = name;

    var form = document.getElementById('modalDeleteResourceForm');
    form.action = dataurl;

};

function adds(name, songid) {

    addSpan.innerHTML = name;

    var input = document.getElementById('song_id');
    input.value = songid;

};


var ico = document.getElementById('ico');
var back = document.querySelector('.back');

back.addEventListener("mouseover", changes);
back.addEventListener("mouseout", changes);

function changes() {
    if (ico.className == 'mai-arrow-back-circle') {
        ico.className = 'mai-arrow-back-circle-outline';
    }
    else {
        ico.className = 'mai-arrow-back-circle';
    }
}
