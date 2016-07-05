@extends('new/template')

@section('title')
Terminos y condiciones
@endsection

@section('css')

@endsection

@section('options-user')
            @include('partials/options-user')

@endsection

@section('content')
    <section id="terms-conditions">
    <h2>Terminos y condiciones del Servicio</h2>
        <section id="list-conditions">
            <ol>
                <li>Cuando publicas contenido o información significa que permites que todos, incluidas las personas que son ajenas a Elatlas, accedan a dicha información, la utilicen y la asocien a ti.</li>
                <li>No publicarás contenido que contenga lenguaje que incite al odio, resulte intimidatorio, sea pornográfico, incite a la violencia o contenga desnudos o violencia gráfica o injustificada.</li>
                <li>No proporcionarás información falsa en Elatlas</li>
                <li>Si infringes repetidamente los derechos de propiedad intelectual de otras personas, inhabilitaremos tu cuenta cuando lo estimemos oportuno.</li>
                <li>No somos responsables del contenido o de la información que los usuarios transmitan o compartan en Elaltas. No somos responsables de ningún contenido que se considere ofensivo, inapropiado, obsceno, ilegal o inaceptable que puedas encontrar en Elatlas.</li>
                <li>Te notificaremos antes de realizar cambios en estas condiciones y te daremos la oportunidad de revisar y comentar las condiciones modificadas antes de seguir usando nuestros Servicios.</li>
                <li>El uso continuado de los Servicios de Elatlas después de recibir la notificación sobre los cambios en nuestras condiciones, políticas o normas supone la aceptación de las enmiendas.</li>
            </ol>
        </section>

    </section>
@endsection

@section('scripts')

@endsection