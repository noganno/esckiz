<div class="ui segment">
    <a href="{{ url.get() }}slider/admin/edit/{{ model.getId() }}?lang={{ constant('LANG') }}" class="ui button">
        <i class="icon left arrow"></i> {{ helper.at('Back') }}
    </a>

    <form method="post" class="ui negative message form" action="">
        <p>{{ helper.at('Delete slider') }} <b>{{ model.getId() }} | {{ model.getTitle() }}</b>?</p>
        <button type="submit" class="ui button negative"><i class="icon trash"></i> {{ helper.at('Delete') }}</button>
    </form>

</div>