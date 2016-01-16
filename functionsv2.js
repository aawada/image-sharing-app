var upload = document.getElementById('upload');
var image = document.getElementById('image');

function initialize()
{
    // Global variables for current values associated with each slider
    var currentBrightness = 1;
    var currentContrast = 100;
    // alert("Begin!"); // debug message
};

function uploadImage(input) {
    
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            image.setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

$("#upload").change(function(){
    uploadImage(this);
});

function setContrast()
{
   
    var filter = 'contrast(25%)';
    image.style.filter = filter;
    image.style.webkitFilter = filter;
};

function setContrast2()
{
   
    var filter = 'contrast(50%)';
    image.style.filter = filter;
    image.style.webkitFilter = filter;
};


function setContrast3()
{
   
    var filter = 'contrast(70%)';
    image.style.filter = filter;
    image.style.webkitFilter = filter;
};








function setBrightness()
{
   
    var filter = 'brightness(25%)';
    image.style.filter = filter;
    image.style.webkitFilter = filter;
};



function setBrightness2()
{
   
    var filter = 'brightness(50%)';
    image.style.filter = filter;
    image.style.webkitFilter = filter;
};


function setBrightness3()
{
   
    var filter = 'brightness(70%)';
    image.style.filter = filter;
    image.style.webkitFilter = filter;
};






function applyMyNostalgiaFilter() 
{   
    var filter = 'saturate(40%) grayscale(100%) contrast(45%) sepia(100%)';
    image.style.filter = filter;
    image.style.webkitFilter = filter;
};

function applyGrayscaleFilter() 
{   
    var filter = 'grayscale(100%)';
    image.style.filter = filter;
    image.style.webkitFilter = filter;
};

//This is some of the filters i added
function applyLove() 
{  
    var filter = 'contrast(45%) saturate(30)';
    image.style.filter = filter;
    image.style.webkitFilter = filter;
};

function applyBlurry() 
{  
    var filter = 'blur(2px) sepia(.5)';
    image.style.filter = filter;
    image.style.webkitFilter = filter; 
};



 


function revertToOriginal() 
{   
    var filter = '';
    image.style.filter = filter;
    image.style.webkitFilter = filter;
};

function submit()
{
     // Read values from form
    var title = document.getElementById("title").value;
    //document.getElementById("debug").innerHTML = title;
    
    var text = document.getElementById("text").value;
    
    
   
    
    
    //document.getElementById("debug").innerHTML = text;
    
    // Save filtered image in a variable
    var filteredImage = image;
    
    //This adjust the saved image on a certain place on the page
    image.style.position = "absolute";
    image.style.right ='130px';
    image.style.height = '300px';
    image.style.width = '250px';
    // document.getElementById("debug").appendChild(filteredImage); 

    // Manipulate DOM:
    // 1. Clean up (remove) old stuff
    var parent = form.parentElement;
    while (form.firstChild) {
        form.removeChild(form.firstChild);
    }
        
    // 2. Make room for new stuff: formatted title & text + filtered image
   
    parent.innerHTML = '<h2>' + title + '</h2><p><br><br><br><br><br><br>' + text + '</p>';
    parent.appendChild(filteredImage);   
}

//This gives the user a new page to start their design over
function visitPage()
{
    window.location='http://lamp.cse.fau.edu/~sagudelo/project1/project1.html';
  
}

