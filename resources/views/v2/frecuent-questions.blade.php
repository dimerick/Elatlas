@extends('v2/template')

@section('title')
    Atlas del afecto
@endsection

@section('css')
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/v2/css/map.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')

    <section id="about">
        <h3>¿Que es elatlas y que tiene que ver con la geografía?</h3>
        <p>Es una iniciativa pública global y plataforma de redes sociales basada en ideas geográficas. Mucha gente joven no sabe que es la geografía, y como esta es relevante para sus vidas, el hecho es que muchos geógrafos están interesados en los mismos temas que afectan o pueden afectar las vidas de mucha gente joven. Por ejemplo: Música y artes, deporte, salud, medio ambiente, violencia, justicia, género e identidad sexual, identidad racial, vivienda y gentrificación, alimentos y derechos sobre la tierra, economía y transformación política.</p>
        <p>Elatlas es un espacio para la conexión geográfica. En elatlas:
        <br>
        <ul>
          <li>Grupos de personas pueden conectarse con otros grupos localmente, regionalmente y a través del mundo.</li>
            <li>Grupos e individuos pueden conectarse con recursos geográficos, incluyendo las ideas y proyectos de geógrafos quienes están interesados en temas comunes.</li>
            <li>Los grupos pueden contribuir a una base de datos publica – global relevante para la transformación social colectiva.
            </li>
        </ul>
        </p>
        <br>
        <h3>¿Quiénes Pueden Participar?</h3>
        <p>Elatlas está abierto a cualquier grupo, colectivo, ONGs, cooperativas, asambleas y otras formas de articulación de personas trabajando para la transformación pacifica de la sociedad.</p>
        <br>
        <h3>¿Cómo puedes participar en Elatlas?</h3>
        <p>Cualquier grupo puede unirse al Elatlas creando un perfil ingresando a nuestro website, www.elatlas.org. Opción registrarse, una vez tu grupo se registre, pueden compartir y registrar sus actividades y conectarte con otros grupos que están haciendo un trabajo similar. Elatlas es un medio de colaboración y cooperación para el flujo de ideas, recursos y conocimientos. <b>¡Por favor ayúdanos a crecer!</b>
        </p>
        <br>
        <h3>¿Qué es nuestra galería?</h3>
        <p>Es una exposición de los proyectos colaborativos que Elatlas ha contribuido a fomentar. Si quieres que hacer un aporte a nuestra galería, nos puedes contactar al correo electrónico info@elatlas.org. Para informarte los detalles de esta iniciativa.</p>
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('assets/v2/js/map.js') }}"></script>
@endsection