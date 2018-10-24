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
        modal.find('.modal-title').removeClass().addClass('modal-title');
        modal.find('.modal-characteristics').empty();
        modal.find('.modal-passive-skills').empty();
        modal.find('.modal-footer>.modal-categories').empty();
        $.getJSON('characters.json', function(data) {
            var _name = data[id].name;
            var _type = data[id].type;
            var _class = data[id].class;
            var _era = data[id].era;
            var _card = data[id].image_card_path;
            var _characteristics = data[id].characteristics;
            var _categories = data[id].categories;
            var _leader_skill = data[id].leader_skill;
            var _passive_skills = data[id].passive_skills;
            var _skill_ultimate = data[id].skill[0].ultimate;
            var _skill_1 = data[id].skill[1].skill_1;
            var _skill_2 = data[id].skill[2].skill_2;
            var _skill_3 = data[id].skill[3].skill_3;
            if(data[id].skill[4]) {
                modal.find('.modal-skill-4').parent().removeClass("hidden");
                var _skill_4 = data[id].skill[4].skill_4;
            } else {
                modal.find('.modal-skill-4').parent().addClass("hidden");
            }

            modal.find('.modal-title').text(_name)
            modal.find('.modal-title').addClass(_type)
            $.each(_categories, function(index, category) {
                modal.find('.modal-footer>.modal-categories').append("<span class='category-pill'>"+category+"</span>")
            })
            $.each(_characteristics, function(index, characteristic) {
                modal.find('.modal-characteristics').append("<li>"+characteristic+"</li>")
            })
            $.each(_passive_skills, function(index, passive_skill) {
                modal.find('.modal-passive-skills').append("<li>"+passive_skill+"</li>")
            })
            modal.find('.modal-leader-skill>li').html(_leader_skill)

            modal.find('.modal-skill-ultimate>li').html(_skill_ultimate.skill_description)
            modal.find('.modal-skill-1>li').html(_skill_1.skill_description)
            modal.find('.modal-skill-2>li').html(_skill_2.skill_description)
            modal.find('.modal-skill-3>li').html(_skill_3.skill_description)
            if(data[id].skill[4])
                modal.find('.modal-skill-4>li').html(_skill_4.skill_description)

            modal.find('.modal-skill-ultimate-name').html(_skill_ultimate.skill_name)
            modal.find('.modal-skill-1-name').html(_skill_1.skill_name)
            modal.find('.modal-skill-2-name').html(_skill_2.skill_name)
            modal.find('.modal-skill-3-name').html(_skill_3.skill_name)
            if(data[id].skill[4])
                modal.find('.modal-skill-4-cooldown').html("(Max Cooldown : "+_skill_4.max_cooldown+")")

            modal.find('.modal-skill-ultimate-cooldown').html("(Max Cooldown : "+_skill_ultimate.max_cooldown+")")
            modal.find('.modal-skill-1-cooldown').html("(Max Cooldown : "+_skill_1.max_cooldown+")")
            modal.find('.modal-skill-2-cooldown').html("(Max Cooldown : "+_skill_2.max_cooldown+")")
            modal.find('.modal-skill-3-cooldown').html("(Max Cooldown : "+_skill_3.max_cooldown+")")
            if(data[id].skill[4])
                modal.find('.modal-skill-4-cooldown').html("(Max Cooldown : "+_skill_4.max_cooldown+")")

            modal.find('.modal-card').attr('src', _card);
        })
    })
})