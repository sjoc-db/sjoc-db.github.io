$(document).ready( function () {
    table = $('#myTable').DataTable({
        "aoColumns":
            [
                { 
                    "mData": "name",
                    "mRender" : function ( data, type, full ) {
                        return '<img src="'+data[0].path+'" class="img img-responsive" width="50" height="50" />' + '<a href="#" class="chara_name" data-id="'+data[0].id+'" data-featherlight="modal.html" data-featherlight-type="ajax">'+data[0].name+'</a>';
                    }
                },{ 
                    "mData": "year",
                    "mRender" : function ( data, type, full ) {
                        return '<img src="'+data[0].path+'" class="img img-responsive" width="50" height="50" />' + '<p class="d-none">'+data[0].name+'</p>';
                    }
                },{ 
                    "mData": "type",
                    "mRender" : function ( data, type, full ) {
                        return '<img src="'+data[0].path+'" class="img img-responsive" width="50" height="50" />' + '<p class="d-none">'+data[0].name+'</p>';
                    }
                },{
                    "mData": "class",
                    "mRender" : function ( data, type, full ) {
                        return '<img src="'+data[0].path+'" class="img img-responsive" width="50" height="50" />' + '<p class="d-none">'+data[0].name+'</p>';
                    }
                },{
                    "mData": "lead",
                    "mRender" : function ( data, type, full ) {
                        return data[0].description;
                    }
                },{
                    "mData": "lead",
                    "bVisible": false,
                    "mRender" : function ( data, type, full ) {
                        return data[0].main;
                    }
                },{
                    "mData": "lead",
                    "bVisible": false,
                    "mRender" : function ( data, type, full ) {
                        return data[0].stat;
                    }
                }
            ],
    });

    $.getJSON('./test.json', function(data){
        myObject=data;
        $('#myTable').dataTable().fnAddData(myObject);
    });

    $('#msYear, #msType, #msClass, #msMainLead, #msStatLead, #msTypeLead').multiselect({
        buttonText: function(options){
            if (options.length === 0) {
                return 'Select'
            }
            var labels = [];
            options.each(function() {
                if ($(this).attr('value') !== undefined) {
                    labels.push($(this).attr('value'));
                } 
            });
            return labels.join(', ');  
         }
    });

    $('#msYear, #msType, #msClass, #msMainLead, #msStatLead').on('change', function(){
        var search = [];
      
        $.each($(this).find('option:selected'), function(){
            search.push($(this).val());
        });
        search = search.join('|');
        if($(this).attr('id') == 'msYear')
            table.column(1).search(search, true, false).draw();
        else if($(this).attr('id') == 'msType')
            table.column(2).search(search, true, false).draw();
        else if($(this).attr('id') == 'msClass')
            table.column(3).search(search, true, false).draw();
        else if($(this).attr('id') == 'msMainLead')
            table.column(5).search(search, true, false).draw();
        else if($(this).attr('id') == 'msStatLead')
            table.column(6).search(search, true, false).draw();
    });

    $('#msTypeLead').on('change', function(){
        var search = [];
      
        $.each($(this).find('option:selected'), function(){
            search.push($(this).val());
        }); 
        search = search.join(' ');
        table.column(4).search(search).draw();
    });
} );