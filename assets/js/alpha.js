$(document).ready(function(){
    $.getJSON('characters.json', function(data) {
        $.each(data, function(index, value) {
            catsClass = ['gallery_product', 'filter'];
            catsClass.push(value.type);
            catsClass.push(value.class + "-class");
            catsClass.push(value.era);
            catsClass.push(value.obtainable);
            $.each(value.characteristics, function(index, characteristic){
                catsClass.push(characteristic.replace(/\s+/g, '-').toLowerCase());
            });
            $.each(value.categories, function(index, category){
                catsClass.push(category);
            });
            catsClassString = catsClass.join(" ");
            htmlcode = '<div class="'+catsClassString+'">';
            htmlcode += '<a href="#"><img src="'+value.image_path+'" class="img img-fluid"></a>';
            htmlcode += '<p class="name sr-only">'+value.name+'</p>';
            htmlcode += '</div>'
            $('#characters').append(htmlcode);
        })
    })
})