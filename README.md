ci_shortener
============

URL Shortener en Codeigniter

- Controladores -
	welcome : Controlador para Carga principal del formulario para captura de URL larga.
	verifyurl: Validacion y procesamiento de URL capturada en vista Welcome.
	runurl: procesa las short urls para redireccionar a pagina solicitada.
	urlslist: Carga la lista de URL's almacenada para visualizar sus contadores.

- Modelos - 
	runurls: Modelo para procesar las Short URL y alias registrados en la base de datos para los redireccionamientos y contador de visitas.
	urls: Modelo para almacenar el registro de las URLs
	urlslist: Modelo para mostrar las URL's Existentes.

- Vistas -
	Templates: Contiene las vistas de header y footer cargadas en el resto de las vistas que son procesadas.
	Doneurls. Vista para mostrar posterior a la insercion en la base de datos.
	errorpage: vista apra notificar de las URL's no encontradas en la Web.
	urllist: Vista para mostrar los datos de las urls almacenadas.
	welcome_message: vista principal para la captura de URLS

- SQL - 
	Se genera solo una tabla basica, con los campos:
	id_url, long_url, short_url, alias_url, visitas_url, creacion_url

- Statics -
	Carpeta para contener todos los archivos estaticos, CSS, JS, IMAGES, etc.
