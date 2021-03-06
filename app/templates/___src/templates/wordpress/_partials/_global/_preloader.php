<script>
    document.onreadystatechange = function() {

        var settings = {
            html: document.getElementsByTagName('html')[0],
            holder: document.querySelector('.canvas'),
            barOuter: document.querySelector('.progress-bar'),
            barInner: document.querySelector('.progress-bar__loader'),
            states: {
                loading: 'app_loading',
                interact: 'app_interactive',
                complete: 'app_complete'
            },
            js: {
                noJS: 'no-js',
                JS: 'js'
            },
            cases: {
                loading: 'loading',
                interact: 'interactive',
                complete: 'complete'
            }
        }

        settings.html.classList.remove(settings.js.noJS);
        settings.html.classList.add(settings.js.JS);

        switch (document.readyState) {
            case settings.cases.loading:
                settings.html.classList.add(settings.states.loading);
                break;

            case settings.cases.interact:
                settings.html.classList.add(settings.states.interact);
                break;

            case settings.cases.complete:
                settings.html.classList.remove(settings.states.loading);
                settings.html.classList.remove(settings.states.interact);
                settings.html.classList.add(settings.states.complete);
                break;
        }
    }
</script>
