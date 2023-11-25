import './bootstrap';


Echo
.channel(`GLOBAL_STATE_CHANNEL`)
.listen('SpinEvent', (event) => {
    console.dir(event);
});