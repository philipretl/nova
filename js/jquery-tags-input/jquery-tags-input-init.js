

//tags input

$('.tags-input').each(function() {
    var tagsType = $(this).data('type')
    if (tagsType === 'tags') {
        $(this).tagsInput({
            width: 'auto'
            	
        });
    }
    if (tagsType === 'fixedWidth-tags') {
        $(this).tagsInput({
            width: '350',
        });
    }
});

