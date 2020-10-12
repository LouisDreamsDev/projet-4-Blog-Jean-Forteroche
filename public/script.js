tinymce.init({
    selector: 'textarea',
    height: 400,
    placeholder: 'Tapez votre contenu ici...',
    plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinymcespellchecker',
    toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
    toolbar_mode: 'floating',
    branding: false
    });