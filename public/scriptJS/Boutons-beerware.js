document.querySelectorAll('.beer-like').forEach(button => {
    button.addEventListener('click', e => {
        let i = parseInt(button.getAttribute('data-count')) + 1;
        button.setAttribute('data-count', i);
        button.classList.add('beer-like-cheer');
        let link = '/index.php?traitementAJAX=modifyLikeDossier';
        let id = document.getElementById('id_dossier').innerHTML;
        let xhr = createXHR();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    console.log(xhr.responseText);
                }
            }
        };
        var params = 'type=beer&id='+id;
        xhr.open( 'POST' , link, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(params);
    });
});

document.querySelectorAll('.heart-like').forEach(button => {
    button.addEventListener('click', e => {
        var i = parseInt(button.getAttribute('data-count')) + 1;
        button.setAttribute( 'data-count', i);
        button.classList.add('heart-like-count');
        let link = '/index.php?traitementAJAX=modifyLikeDossier';
        let id = document.getElementById('id_dossier').innerHTML;
        let xhr = createXHR();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    console.log(xhr.responseText);
                }
            }
        };
        var params = 'type=heart&id='+id;
        xhr.open( 'POST' , link, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(params);
    });
});

document.querySelectorAll('.mouth-like').forEach(button => {
    button.addEventListener('click', e => {
        var i = parseInt(button.getAttribute('data-count')) + 1;
        button.setAttribute( 'data-count', i);
        button.classList.add('mouth-like-count');
        document.querySelector('.feedback li').classList.add('active');
        let link = '/index.php?traitementAJAX=modifyLikeDossier';
        let id = document.getElementById('id_dossier').innerHTML;
        let xhr = createXHR();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    console.log(xhr.responseText);
                }
            }
        };
        var params = 'type=mouth&id='+id;
        xhr.open( 'POST' , link, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(params);
    });
});

document.querySelectorAll('.leaf-like').forEach(button => {
    button.addEventListener('click', e => {
        var i = parseInt(button.getAttribute('data-count')) + 1;
        button.setAttribute( 'data-count', i);
        button.classList.add('leaf-like-count');
        let link = '/index.php?traitementAJAX=modifyLikeDossier';
        let id = document.getElementById('id_dossier').innerHTML;
        let xhr = createXHR();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    console.log(xhr.responseText);
                }
            }
        };
        var params = 'type=leaf&id='+id;
        xhr.open( 'POST' , link, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(params);
    });
});

document.querySelectorAll('.diamond-like').forEach(button => {
    button.addEventListener('click', e => {
        var i = parseInt(button.getAttribute('data-count')) + 1;
        button.setAttribute( 'data-count', i);
        button.classList.add('diamond-like-count');
        let link = '/index.php?traitementAJAX=modifyLikeDossier';
        let id = document.getElementById('id_dossier').innerHTML;
        let xhr = createXHR();
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                if(xhr.status == 200){
                    console.log(xhr.responseText);
                }
            }
        };
        var params = 'type=diamond&id='+id;
        xhr.open( 'POST' , link, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(params);
    });
});