<script src="{{ url('templates/main/js/jquery.js') }}"></script>
<script src="{{ url('templates/main/js/bootstrap.min.js') }}"></script>
<script src="{{ url('templates/main/js/jasny-bootstrap.min.js') }}"></script>
<script src="{{ url('templates/main/js/offcanvas.js') }}"></script>
<script src="{{ url('templates/main/js/template.js') }}"></script>
<script src="{{ url('templates/main/js/hoverForMore.js') }}"></script>
<script src="{{ url('templates/main/js/summernote.min.js') }}"></script>
<script src="{{ url('templates/main/js/summernote-ru-RU.js') }}"></script>
<script src="{{ url('templates/main/js/select2.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#discription').summernote({
            height:100,
            lang: 'ru-RU'
        });
    });

    var data = [
        { id: 0, text: 'enhancement' },
        { id: 1, text: 'bug' },
        { id: 2, text: 'duplicate' },
        { id: 3, text: 'invalid' },
        { id: 4, text: 'wontfix' }
    ];
    $(document).ready(function() {
        $("#id_label_multiple").select2({data: data});

    });
</script>
<script>$('#selectItem').selectize({
        valueField: 'id',
        searchField: ['title', 'subtitle'],
        maxItem: '4',
        options: [
            {id: 1, title: 'One', slug: 'one', subtitle: 'One Subtitle', category: 'Category One'},
            {id: 2, title: 'Two', slug: 'two', subtitle: 'Two Subtitle', category: 'Category One'},
            {id: 3, title: 'Three', slug: 'three', subtitle: 'Three Subtitle', category: 'Category Two'},
            {id: 4, title: 'Four', slug: 'four', subtitle: 'Four Subtitle', category: 'Category Two'}
        ]

    });</script>