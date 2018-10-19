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
            htmlcode += '<a href="#"><img src="'+value.image_portrait_path+'" class="img img-fluid" data-toggle="modal" data-target="#exampleModal" data-id="'+index+'"></a>';
            htmlcode += '<p class="name sr-only">'+value.name+'</p>';
            htmlcode += '<p class="series sr-only">'+value.series+'</p>';
            htmlcode += '</div>'
            $('#characters').append(htmlcode);
        })
    })

    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('.modal-footer>.modal-categories').empty();
        $.getJSON('characters.json', function(data) {
            var _name = data[id].name;
            var _type = data[id].type;
            var _class = data[id].class;
            var _era = data[id].era;
            var _categories = data[id].categories;
            modal.find('.modal-title').text(_name)
            $.each(_categories, function(index, category) {
                modal.find('.modal-footer>.modal-categories').append("<span class='category-pill'>"+category+"</span>")
            })
        })
      })
})