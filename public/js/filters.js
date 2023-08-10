let selectedColor = 'all';

const colorImages = document.querySelectorAll('#color,#rarity,#type,#class');
colorImages.forEach(image => {
    image.addEventListener('click', () => {
        selectedColor = image.getAttribute('src');
        console.log(selectedColor);
        filterData();
    });
});

function filterData() {
    const imageWrappers = document.querySelectorAll('.img-wrapper');
    imageWrappers.forEach(wrapper => {
        const dataColor = wrapper.getAttribute('data-color');
        const dataRarity = wrapper.getAttribute('data-rarity');
        const dataType = wrapper.getAttribute('data-type');
        const dataClass = wrapper.getAttribute('data-class');
        if (selectedColor === 'all' || dataColor === selectedColor || dataRarity == selectedColor || dataType == selectedColor || dataClass == selectedColor) {
            wrapper.style.display = 'block';
        } else {
            wrapper.style.display = 'none';
        }
    });
}


/* LIVE SEARCH */
$(document).ready(function() {
    $('#searchInput').on('input', function() {
        var searchValue = $(this).val().toLowerCase();
        console.log(searchValue);
        $('.image-container .img-wrapper').each(function() {
            var itemData = $(this).data('name').toLowerCase();
            if (itemData.indexOf(searchValue) === -1) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });
});


function agregarClick(){
    const images = document.querySelectorAll('.draggable-image[data-image-value]');
    images.forEach(img => {
    img.addEventListener('click', () => {
        const imageValue = img.dataset.imageValue;
        // Redirect to another view and send the image value as a query parameter
        window.location.href = `/another-view?imageValue=${imageValue}`;
    });
});
}