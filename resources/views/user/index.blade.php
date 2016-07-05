@extends('plantilla')

@section('title')
    Quienes somos
    @endsection

@section('top-bar')
    @if($user != null)
        @include('partials.top-bar-user')
    @else
        @include('partials.top-bar-invitado')
    @endif
@endsection

@section('pagina')
    Quienes somos
    @endsection

    @section('content')

                    <h1>¿Qué es el Atlas del Afecto?</h1>
                    <p>El Atlas es proceso social basado en los postulados de la cartografía crítica, la cual imagina nuevas conexiones entre grupos comunitarios de base en diferentes países.  Los grupos comunitarios de base son los potenciadores de la transformación social. Este proceso es a la vez vivido (corporal) y digital (online). Como proceso social, el Atlas busca posibilitar nuevas visiones de los diversos significados de la transformación social a través de la generación de diálogos con y entre diferentes grupos comunitarios de base, y por la recolección de información sobre sus proyectos, lugares, motivaciones y redes. El Atlas busca facilitar nuevas conexiones entre grupos en dos vías: desde actividades en lugares específicos y desde una plataforma online para la comunicación. El atlas busca hacer nuevas creaciones en forma de mapas, imágenes, visualizaciones y narrativas las cuales cuentan las historias de las transformaciones sociales colectivas formadas por los grupos en el atlas, y busca compartir esas creaciones personalmente y online (en la galería). Y, finalmente, el Atlas reconoce el potencial afectivo de las resistencias y resiliencias demostradas por estos grupos para afrontar las opresiones sociales, económicas,  ecológicas.</p>

                    <h1>¿Quien conforma el Atlas del Afecto?</h1>
                    <p>El Atlas es en si mismo una red en crecimiento compuesta por grupos comunitarios de base los cuales participan habitualmente en procesos locales y regionales para mejorar las condiciones de vida de las comunidades, trabajar por la justicia social, mitigar riesgos para la salud y la seguridad humana, y construir paz y la protección ambiental. El equipo actual del Atlas esta conformado por jóvenes activistas sociales, artistas, estudiantes y profesores de Medellín, Colombia, y de Philadelphia Pennsylvania, U.S.A,  Las actuales prioridades del equipo del atlas son: educación popular, justicia social, justicia ambiental, y cultura política.</p>

                    <h1>¿Quienes pueden Participar?</h1>
                    <p>Todas las personas, grupos de base comunitaria, y organizaciones interesadas y comprometidas con la transformación social.</p>

                    <h1>¿Como Participar?</h1>
                    <p>La forma más fácil de participar es registrar tu grupo crear un perfil y compartir las actividades y procesos que están realizando. Otra manera de participar es colaborar con el equipo de atlas del afecto para generar mapas temáticos en formatos digitales (usando sistemas de información geográfica) o través de cartografías alternativas como las realizadas a través de expresiones artísticas. Te invitamos a crear tu perfil en nuestra web.</p>

                    <h1>¿Dónde está el Atlas del Afecto?</h1>
                    <p>Nosotros comenzamos en Medellín Colombia, porque la ciudad tiene muchas ideas y ejemplos de resistencia para difundir.  El Atlas esta creciendo y esperemos que llegue a muchos lugares del mundo.</p>

                    <h1>¿Por que participar en el Atlas del Afecto?</h1>
                    <p>El atlas permitirá que los grupos comunitarios de base construyan nuevas conexiones con grupos que realizan un trabajo similar no solo en Medellín sino en Colombia y otras partes del mundo. Estas conexiones pueden permitir nuevos flujos de ideas, recursos y formas alternativas de poder en solidaridad con otros grupos. También, el atlas generara nuevas ideas para producir conocimiento sobre las relaciones entre comunidades, territorio y espacio.</p>

                    @if($user == null)
                        <p><a href="/grupos/create" class="btn btn-danger" role="button">Registrarme</a></p>

                    @endif

@endsection
