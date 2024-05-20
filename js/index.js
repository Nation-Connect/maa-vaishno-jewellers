
console.log('Bhartiya Fine Jewels!!');

$(document).ready(function() {
    
    let getData = function() {
        fetch('gallery.json')
            .then(response => response.json())
            .then(json => {
                json.map(image => {
                    $('#galleryItems').append(`
                        <div class="col-md-4 item gallery-item" data-type="${image.type}" data-hideInAll="${image.hideInAll}">
                            <div class="contents">
                                <a href="${image.path}" data-lightbox="${image.type}">
                                    <img src="${image.path}" alt="${image.type}" style="background-color:black">
                                </a>
                            </div>
                        </div>
                    `)
                })
                filterCollections('all');

                return json;
            });

       


    };

    getData();

    $('#all').on('click', function() {
        filterCollections('all');
    });
    
    $('#gold').on('click', function() {
        filterCollections('gold');
    });
    
    $('#silver').on('click', function() {
        filterCollections('silver');
    });
    
    $('#antique').on('click', function() {
        filterCollections('antique');
    });
     $('#rings').on('click', function() {
        filterCollections('rings');
    });
      $('#necklace').on('click', function() {
        filterCollections('necklace');
    });
       $('#bangles').on('click', function() {
        filterCollections('bangles');
    });
       $('#ear_rings').on('click', function() {
        filterCollections('ear_rings');
    });
})


function setCollectionTypeContent(selectedType){
    $('#aboutJewel').php('');
     fetch('galleryJewelleryType.json')
            .then(response => response.json())
            .then(json => {
                json.map(type => {
                    
                    if(selectedType==type.name){
                         $('#aboutJewel').php(`
                       
                                                <div class="row heading text-center">
                <p>${type.about}</p>
            </div>
                    `)

                    }
                   
                })


                return json;
            });

}

function filterCollections(c) {
    
    let btns = document.getElementsByClassName('btn-Bhartiya-o');
    for(let j=0; j<btns.length; j++) {
        if(btns[j].id === c) {
            btns[j].classList.add('active');
        } else {
            btns[j].classList.remove('active');
        }
    }

    let items = document.getElementsByClassName('gallery-item');
    for(let i=0; i<items.length; i++) {
        if(c === 'all') {
            
            if(items[i].getAttribute('data-hideInAll')=="true"){
                console.log(items[i].getAttribute('data-hideInAll'));
            }
            else{
                items[i].classList.add('show');
            items[i].children[0].children[0].setAttribute('data-lightbox', 'all');
            }
            setCollectionTypeContent(c);
        } else if(items[i].getAttribute('data-type') === c) {
            setCollectionTypeContent(c);
            items[i].classList.add('show');
            items[i].children[0].children[0].setAttribute('data-lightbox', c);
        } else {
            setCollectionTypeContent(c);
            items[i].classList.remove('show');
        }
    }
}

function lightBox(img) {
    
}
