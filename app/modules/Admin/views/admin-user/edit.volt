<form method="post" action="" class="ui form">

    <!--controls-->
    <div class="ui segment">

        <a href="{{ url.get() }}admin/admin-user" class="ui button">
            <i class="icon left arrow"></i> {{helper.at('Back')}}
        </a>

        <div class="ui positive submit button">
            <i class="save icon"></i> {{helper.at('Save')}}
        </div>

        {% if model.getId() %}
            <a href="{{ url.get() }}admin/admin-user/delete/{{ model.getId() }}" class="ui button red">
                <i class="icon trash"></i> {{helper.at('Delete')}}
            </a>
        {% endif %}

    </div>
    <!--end controls-->

    <div class="ui segment">
        <div class="two fields">
            <div class="field">
                {{ form.renderDecorated('login') }}
                {{ form.renderDecorated('email') }}
                {{ form.renderDecorated('name') }}
            </div>
            <div class="field">
                {{ form.renderDecorated('role') }}
                {{ form.renderDecorated('password') }}
                {{ form.renderDecorated('active') }}
            </div>
        </div>
    </div>

</form>

<script>
    $('.ui.form').form({});
</script>