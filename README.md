<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

### **Sintaxis Principal de Laravel y PHP:**

- **`=>`**: Se utiliza para asignar un valor a una clave en un array asociativo.
- **`>`**: Se utiliza para acceder a propiedades y métodos de un objeto.
- **`===`**: Se utiliza para comparar si dos valores son idénticos en valor y tipo de dato.
- **`@foreach`**: Se utiliza en las vistas de Blade de Laravel para iterar sobre una colección.
- **`@empty`**: Se utiliza en las vistas de Blade de Laravel para verificar si una colección está vacía.
- **`@csrf`**: Se utiliza en los formularios de Laravel para agregar un token CSRF que ayuda a proteger contra ataques de falsificación de solicitudes entre sitios.
- **`@method`**: Se utiliza en los formularios de Laravel para especificar un método HTTP que no sea GET o POST (por ejemplo, DELETE o PUT).

## **Tutorial para Empezar con el Proyecto de Almacenamiento de Contactos en Laravel**

### **Paso 1: Clonar el Repositorio**

1. Abre tu terminal y navega hasta el directorio donde deseas clonar el repositorio.
2. Ejecuta el siguiente comando para clonar el repositorio:
    
    ```bash
    
    git clone https://github.com/GreenyHat/laravel-lab.git
    ```
    
3. Ingresa al directorio del proyecto clonado:
    
    ```bash
    
    cd laravel-lab
    ```
    

### **Paso 2: Instalación de Dependencias de PHP con Composer**

1. Ejecuta el siguiente comando para instalar las dependencias de PHP utilizando Composer:Esto instalará todas las dependencias de PHP especificadas en el archivo **`composer.json`**.
    
    ```
    composer install
    ```
    

### **Paso 3: Configuración del Entorno**

1. Copia el archivo **`.env.example`** y renómbralo a **`.env`**:
    
    ```bash
    
    cp .env.example .env
    ```
    
2. Genera una nueva clave de aplicación ejecutando el siguiente comando:
    
    Esta clave se utilizará para cifrar cookies y otros datos sensibles.
    
    ```vbnet
    php artisan key:generate
    ```
    

### **Paso 4: Configuración de la Base de Datos**

1. Configura tu base de datos en el archivo **`.env`**, especificando el nombre de la base de datos, el usuario y la contraseña.
2. Ejecuta las migraciones para crear las tablas de la base de datos:
    
    ```
    php artisan migrate
    ```
    

### **Paso 5: Instalación de Dependencias de JavaScript con npm**

1. Asegúrate de tener Node.js y npm instalados en tu sistema.
2. Ejecuta el siguiente comando para instalar las dependencias de JavaScript:
    
    ```
    npm install
    ```
    

### **Paso 6: Compilación de Assets**

1. Para compilar los assets una vez, ejecuta el siguiente comando:Esto compilará los assets una sola vez para su uso en producción.
    
    ```arduino
    npm run dev
    ```
    
2. Si estás desarrollando y deseas compilar automáticamente los assets cada vez que se realice un cambio en los archivos fuente, puedes ejecutar el siguiente comando:Esto observará los cambios en los archivos fuente y compilará automáticamente los assets cuando sea necesario.
    
    ```arduino
    npm run watch
    ```
    
    cualquier persona que comience desde cero en cualquier PC con cualquier sistema operativo debería poder continuar con el proyecto. Veamos cómo importar la base de datos:
    
    ### **Importar la Base de Datos**
    
    1. **Configuración de la Base de Datos**: Como se mencionó en el tutorial, antes de ejecutar **`php artisan migrate`**, debes **configurar tu base de datos en el archivo** **`.env`**. Esto incluye especificar el nombre de la base de datos, el usuario y la contraseña.
    2. **Ejecutar las Migraciones**: Una vez que la configuración de la base de datos esté completa, puedes ejecutar las migraciones con el comando **`php artisan migrate`**. Este comando creará las tablas necesarias en la base de datos según las definiciones en los archivos de migración ubicados en **`database/migrations`**.
    3. **Exportar/Importar la Base de Datos (Opcional)**: Si ya tienes una base de datos existente que deseas importar en lugar de utilizar las migraciones, puedes exportarla desde tu base de datos actual y luego importarla en tu nuevo entorno. Por ejemplo:
        - **Exportar**: Utiliza la herramienta de exportación de tu base de datos actual (por ejemplo, phpMyAdmin para MySQL) para exportar la estructura y los datos de la base de datos a un archivo SQL.
        - **Importar**: En tu nuevo entorno, puedes importar este archivo SQL utilizando la misma herramienta de administración de la base de datos o mediante la línea de comandos. Por ejemplo, para MySQL, podrías usar el comando **`mysql -u usuario -p nombre_basedatos < archivo.sql`**.
    
    Al seguir estos pasos, cualquier persona debería poder importar la estructura y los datos de la base de datos y continuar con el proyecto sin problemas.
    

### **Apuntes para el Aprendizaje de Laravel**

### **1. Estructura del Proyecto**

- Laravel sigue una estructura de directorios bien definida:
    - **`app/`**: Contiene la lógica de la aplicación, como modelos, controladores y servicios.
    - **`database/`**: Almacena las migraciones de la base de datos y los seeds.
    - **`public/`**: Es el punto de entrada de la aplicación y contiene recursos accesibles públicamente, como archivos CSS, JavaScript e imágenes.
    - **`resources/`**: Aquí se encuentran las vistas, archivos de lenguaje y assets que se compilan.
    - **`routes/`**: Define las rutas de la aplicación, incluyendo rutas web y API.
    - **`storage/`**: Almacena archivos generados por la aplicación, como logs, caches y uploads.
- Puedes ampliar estas carpetas según tus necesidades, pero esta estructura proporciona un punto de partida organizado y limpio.

### **2. MVC (Modelo-Vista-Controlador)**

- Laravel sigue el patrón de diseño MVC, lo que facilita la separación de preocupaciones y el mantenimiento del código.
- **Modelo**: Representa la estructura y la lógica de los datos.
- **Vista**: Se encarga de la presentación de la información al usuario.
- **Controlador**: Actúa como intermediario entre el modelo y la vista, procesando las solicitudes del usuario y actualizando la interfaz de usuario.
    
    ### **2.1 Introducción al Modelo-Vista-Controlador (MVC) con Laravel**
    
    El patrón Modelo-Vista-Controlador (MVC) es un enfoque arquitectónico utilizado comúnmente en el desarrollo de aplicaciones web. Proporciona una forma de estructurar y organizar el código para mejorar la mantenibilidad, escalabilidad y reutilización del código.
    
    1. **Modelo**:
        - El modelo representa los datos y la lógica de negocio de la aplicación.
        - En Laravel, los modelos son clases PHP que interactúan con la base de datos a través de Eloquent ORM.
        - Un modelo define la estructura de los datos y las relaciones entre ellos.
    
    ```php
    phpCopy code
    <?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class User extends Model
    {
        // Definición del modelo User
    }
    
    ```
    
    1. **Vista**:
        - La vista es la interfaz de usuario que presenta los datos al usuario final.
        - En Laravel, las vistas son archivos Blade que contienen HTML, CSS y código PHP para mostrar datos dinámicos.
        - Las vistas se encargan de la presentación y la interacción del usuario.
    
    ```
    bladeCopy code
    <!-- Ejemplo de vista Blade -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profile</title>
    </head>
    <body>
        <h1>User Profile</h1>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
    </body>
    </html>
    
    ```
    
    1. **Controlador**:
        - El controlador actúa como intermediario entre el modelo y la vista.
        - En Laravel, los controladores son clases PHP que manejan las solicitudes HTTP y coordinan la lógica de la aplicación.
        - Un controlador recibe las solicitudes del usuario, interactúa con el modelo para recuperar o manipular datos y luego devuelve una respuesta al usuario.
    
    ```php
    phpCopy code
    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Models\User;
    
    class UserController extends Controller
    {
        public function show($id)
        {
            $user = User::find($id);
            return view('user.profile', ['user' => $user]);
        }
    }
    
    ```
    
    En resumen, el patrón Modelo-Vista-Controlador (MVC) divide una aplicación web en tres componentes principales: el modelo, la vista y el controlador. Cada componente tiene una responsabilidad específica y trabaja en conjunto para proporcionar una experiencia de usuario fluida y coherente. Laravel facilita la implementación de este patrón gracias a sus características y estructura predeterminada.
    

### **3. Blade Templating Engine**

- Laravel utiliza Blade como su motor de plantillas, lo que permite escribir código PHP en las vistas de una manera limpia y eficiente.
- Permite el uso de directivas como **`@if`**, **`@foreach`**, **`@extends`**, etc., para simplificar la lógica de presentación en las vistas.

### **4. Eloquent ORM**

- Eloquent es el ORM integrado de Laravel que simplifica la interacción con la base de datos.
- Define relaciones entre modelos utilizando métodos como **`hasOne`**, **`hasMany`**, **`belongsTo`**, etc.
- Permite realizar consultas utilizando una sintaxis fluída y expresiva.

### **5. Migraciones y Semillas (Seeding)**

- Laravel ofrece migraciones para gestionar la estructura de la base de datos de manera programática y portátil.
- Las semillas se utilizan para poblar la base de datos con datos de prueba.

### **Recursos Adicionales:**

- [Documentación Oficial de Laravel](https://laravel.com/docs)
- [Laracasts](https://laracasts.com/) (Plataforma de aprendizaje con tutoriales en vídeo sobre Laravel y otros temas relacionados con el desarrollo web.)
- [Api de Laravel](https://laravel.com/api/8.x/index.html)

### **Estructura del Código y Relaciones**

### **1. Modelos y Relaciones**

- En el directorio **`app/Models`**, encontrarás los modelos de Eloquent que representan las entidades de tu aplicación. Por ejemplo, el modelo **`User.php`** representa la tabla de usuarios en la base de datos.
- Cada modelo puede tener relaciones definidas. Por ejemplo, en **`User.php`**, podrías tener una relación **`hasMany`** con el modelo **`Post.php`** si un usuario puede tener varios posts.
- Ejemplo de modelo **`User.php`** con una relación **`hasMany`** con **`Post.php`**:
    
    ```php
    
    // app/Models/User.php
    class User extends Model {
        public function posts() {
            return $this->hasMany(Post::class);
        }
    }
    
    ```
    

### **2. Controladores y Rutas**

- Los controladores, ubicados en el directorio **`app/Http/Controllers`**, gestionan la lógica de la aplicación y se relacionan con las rutas definidas en **`routes/web.php`** o **`routes/api.php`**.
- Por ejemplo, un controlador **`PostController.php`** podría manejar las acciones relacionadas con los posts, como mostrar, crear, actualizar y eliminar.
- Ejemplo de una ruta en **`routes/web.php`** que apunta a un método en **`PostController.php`**:
    
    ```php
    
    // routes/web.php
    Route::get('/posts', 'App\Http\Controllers\PostController@index');
    
    ```
    

### **3. Vistas y Blade**

- Las vistas, ubicadas en el directorio **`resources/views`**, contienen la interfaz de usuario de la aplicación y se pueden renderizar utilizando Blade.
- Por ejemplo, **`resources/views/posts/index.blade.php`** podría ser la vista que muestra una lista de posts.
- Ejemplo de uso de Blade en una vista para mostrar datos dinámicos:
    
    ```php
    
    <!-- resources/views/posts/index.blade.php -->
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
    
    ```
    

### **4. Migraciones y Semillas**

- Las migraciones, ubicadas en el directorio **`database/migrations`**, se utilizan para definir la estructura de la base de datos.
- Las semillas, ubicadas en **`database/seeders`**, se utilizan para poblar la base de datos con datos de prueba.
- Ejemplo de una migración para crear la tabla **`posts`**:
    
    ```php
    phpCopy code
    // database/migrations/2022_04_23_create_posts_table.php
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }
    
    ```
    
    ## **Documentación de la Aplicación de Almacenamiento de Contactos**
    
    ### **Estructura del Proyecto**
    
    - **app/Controllers**: Contiene los controladores de la aplicación.
    - **app/Models**: Almacena los modelos de Eloquent para interactuar con la base de datos.
    - **database/migrations**: Contiene las migraciones de la base de datos para definir su estructura.
    - **database/seeders**: Aquí se encuentran los archivos de semillas para poblar la base de datos con datos de prueba.
    - **resources/views/contacts**: Contiene las vistas relacionadas con los contactos.
    
    ### **Archivos Clave**
    
    ### **1. `ContactController.php`**
    
    - Este controlador gestiona las acciones relacionadas con los contactos, como mostrar la lista de contactos, crear un nuevo contacto, mostrar un contacto individual, actualizar un contacto y eliminar un contacto.
    - Cada acción en este controlador corresponde a una función que se comunica con los modelos de Eloquent para realizar operaciones en la base de datos.
    
    ### **2. `HomeController.php`**
    
    - Este controlador maneja las acciones relacionadas con la página de inicio de la aplicación.
    - Puede incluir lógica relacionada con la autenticación, la redirección y la presentación de información general sobre la aplicación.
    
    ### **3. `/resources/views/contacts`**
    
    - Este directorio contiene las vistas relacionadas con los contactos.
    - **`index.blade.php`**: Vista para mostrar la lista de contactos.
    - **`create.blade.php`**: Vista para crear un nuevo contacto.
    - **`show.blade.php`**: Vista para mostrar los detalles de un contacto específico.
    - **`edit.blade.php`**: Vista para editar la información de un contacto.
    - **`partials/`**: Directorio que puede contener fragmentos de código HTML reutilizables, como encabezados o formularios.
    
    ### **Flujo de Trabajo**
    
    1. **Rutas**: Las rutas definidas en **`routes/web.php`** dirigen las solicitudes HTTP a los métodos apropiados en los controladores.
    2. **Controladores**: Los métodos en los controladores manejan las solicitudes, interactúan con los modelos si es necesario y devuelven las respuestas adecuadas (por ejemplo, redirecciones o vistas).
    3. **Modelos**: Los modelos de Eloquent interactúan con la base de datos para realizar operaciones CRUD (crear, leer, actualizar, eliminar) en los datos de los contactos.
    4. **Vistas**: Las vistas renderizan la interfaz de usuario y muestran la información al usuario final.
    
    ### **Recomendaciones para Futuros Desarrolladores**
    
    - **Documentación Clara y Concisa**: Proporciona comentarios en el código para explicar su funcionalidad y proporciona una documentación clara sobre cómo utilizar cada parte de la aplicación.
    - **Separación de Responsabilidades**: Mantén una clara separación entre las capas de tu aplicación (modelo, vista, controlador) para facilitar el mantenimiento y la escalabilidad.
    - **Pruebas Unitarias**: Considera la posibilidad de escribir pruebas unitarias para verificar el funcionamiento correcto de cada componente de la aplicación.
    
    ## Desglose del proyecto del curso Laravel:
    
    1. **Modelo (`Contact.php`)**:
    
    ```php
    phpCopy code
    <?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class Contact extends Model
    {
        use HasFactory;
    
        protected $fillable = ['name', 'email', 'phone'];
    }
    
    ```
    
    - Este es un modelo Eloquent que representa la tabla **`contacts`** en la base de datos.
    - Utiliza la propiedad **`$fillable`** para especificar qué campos pueden ser asignados masivamente.
    1. **Controlador (`ContactController.php`)**:
    
    ```php
    phpCopy code
    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Models\Contact;
    
    class ContactController extends Controller
    {
        public function index()
        {
            $contacts = Contact::all();
            return view('contacts.index', ['contacts' => $contacts]);
        }
    
        public function create()
        {
            return view('contacts.create');
        }
    
        public function store(Request $request)
        {
            $contact = Contact::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone')
            ]);
    
            // Otras acciones después de almacenar el contacto...
    
            return redirect('/contacts')->with('success', 'Contact created successfully!');
        }
    }
    
    ```
    
    - Este es un controlador que maneja las acciones relacionadas con los contactos.
    - El método **`index`** muestra la lista de contactos.
    - El método **`create`** muestra el formulario para crear un nuevo contacto.
    - El método **`store`** almacena un nuevo contacto en la base de datos.
    1. **Vista (`index.blade.php`)**:
    
    ```
    bladeCopy code
    @extends('layouts.app')
    
    @section('content')
        <h1>Contact List</h1>
        <ul>
            @foreach($contacts as $contact)
                <li>{{ $contact->name }} - {{ $contact->email }}</li>
            @endforeach
        </ul>
    @endsection
    
    ```
    
    - Esta es una vista Blade que muestra la lista de contactos.
    - Utiliza la sintaxis Blade para mostrar los datos obtenidos del controlador.
    - La directiva **`@extends('layouts.app')`** extiende el diseño principal de la aplicación.
    1. **Rutas (`web.php`)**:
    
    ```php
    phpCopy code
    use App\Http\Controllers\ContactController;
    
    Route::get('/contacts', [ContactController::class, 'index']);
    Route::get('/contacts/create', [ContactController::class, 'create']);
    Route::post('/contacts', [ContactController::class, 'store']);
    
    ```
    
    - Estas son las rutas definidas en el archivo **`web.php`** que dirigen las solicitudes a los métodos correspondientes del controlador **`ContactController`**.
    
    En este desglose, puedes ver cómo los modelos se utilizan para interactuar con la base de datos, cómo los controladores manejan las acciones del usuario y cómo las vistas muestran la interfaz de usuario final. Este es el flujo básico del patrón Modelo-Vista-Controlador (MVC) en Laravel.
    
    Si necesitas más ejemplos o tienes alguna pregunta específica, ¡no dudes en pedirlos! Estoy aquí para ayudar.
    
    ## Nomenclatura
    
    La nomenclatura adecuada en Laravel es fundamental para mantener un código limpio, legible y fácil de mantener. Aquí hay algunos puntos sobre la importancia de la nomenclatura y cómo puede ayudar a ahorrar código:
    
    1. **Convención sobre configuración**:
        - Laravel sigue el principio de "convención sobre configuración", lo que significa que proporciona una estructura predefinida y espera que sigas ciertas convenciones para nombres de clases, métodos, rutas, etc.
        - Siguiendo estas convenciones, puedes escribir menos código, ya que Laravel asume automáticamente ciertos comportamientos basados en la nomenclatura.
    2. **Nombres descriptivos**:
        - Usar nombres descriptivos para clases, métodos y variables hace que el código sea más comprensible y autodocumentado.
        - Los nombres descriptivos ayudan a otros desarrolladores (y a ti mismo en el futuro) a entender rápidamente la función y el propósito de cada componente del código.
    3. **Ejemplo de Controlador**:
    
    ```php
    phpCopy code
    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use App\Models\User; // Nombre claro para el modelo
    
    class UserController extends Controller // Nombre claro para el controlador
    {
        public function index()
        {
            $users = User::all(); // Variable descriptiva
            return view('users.index', ['users' => $users]); // Vista con nombre descriptivo
        }
    
        // Otros métodos del controlador con nombres descriptivos...
    }
    
    ```
    
    1. **Ejemplo de Modelo**:
    
    ```php
    phpCopy code
    <?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class User extends Model // Nombre claro para el modelo
    {
        // Definición del modelo con nombres descriptivos de propiedades y relaciones
    }
    
    ```
    
    1. **Migraciones**:
        - Las migraciones en Laravel también pueden beneficiarse de una nomenclatura adecuada.
        - Al nombrar las migraciones de manera descriptiva, puedes deducir fácilmente la estructura de la tabla sin necesidad de revisar el contenido de la migración.
    2. **Ejemplo de Migración**:
    
    ```php
    phpCopy code
    <?php
    
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    class CreateUsersTable extends Migration // Nombre claro para la migración
    {
        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id(); // Nombre descriptivo para la columna
                $table->string('name'); // Nombre descriptivo para la columna
                $table->string('email')->unique(); // Nombre descriptivo para la columna
                $table->timestamp('email_verified_at')->nullable(); // Nombre descriptivo para la columna
                $table->string('password'); // Nombre descriptivo para la columna
                $table->rememberToken(); // Nombre descriptivo para la columna
                $table->timestamps(); // Nombres descriptivos para las columnas de fecha
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('users'); // Nombre claro para revertir la migración
        }
    }
    
    ```
    
    Siguiendo estas convenciones de nomenclatura en Laravel, puedes escribir código más limpio, legible y mantenible, lo que a su vez puede ahorrarte tiempo y esfuerzo en el desarrollo y mantenimiento de tu aplicación.
    
    ## Migraciones
    
    Las migraciones en Laravel son una forma de controlar los cambios en la estructura de la base de datos de manera controlada y consistente a lo largo del tiempo. Aquí tienes una explicación sobre cómo funcionan y algunos ejemplos:
    
    1. **¿Qué son las migraciones?**:
        - Las migraciones son archivos de PHP que describen los cambios en la estructura de la base de datos.
        - Cada migración representa un conjunto de cambios que se aplicarán a la base de datos, como crear una tabla, agregar una columna o modificar una restricción.
    2. **¿Por qué son importantes?**:
        - Las migraciones permiten que los cambios en la base de datos sean controlados y reversibles.
        - Facilitan el trabajo en equipo, ya que todos los desarrolladores pueden aplicar las mismas migraciones en sus entornos de desarrollo y producción.
    3. **Orden de los comandos de migración**:
        - Crear una migración: **`php artisan make:migration NombreDeLaMigracion`**
        - Ejecutar las migraciones pendientes: **`php artisan migrate`**
        - Revertir la última migración: **`php artisan migrate:rollback`**
        - Revertir todas las migraciones: **`php artisan migrate:reset`**
    4. **Ejemplo de migración**:
    
    ```php
    phpCopy code
    <?php
    
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    class CreateProductsTable extends Migration
    {
        public function up()
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('description')->nullable();
                $table->decimal('price', 8, 2);
                $table->timestamps();
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('products');
        }
    }
    ```
    
    1. **Buenas prácticas**:
        - Utiliza nombres descriptivos para las migraciones que reflejen los cambios que se están realizando en la base de datos.
        - Mantén las migraciones pequeñas y enfocadas en un único conjunto de cambios.
        - Utiliza la reversión adecuadamente en el método **`down`** para poder revertir los cambios de manera segura.
        - Ejecuta las migraciones de forma regular en todos los entornos para mantener la base de datos actualizada.
        
        ## Commit “file-storage”
        
        1. **Almacenamiento de Archivos en Laravel**:
            - Laravel proporciona una manera conveniente de almacenar archivos en el sistema de archivos de la aplicación.
            - Esto se logra utilizando el sistema de archivos de Laravel, que incluye servicios para almacenar, recuperar y manipular archivos de manera segura y eficiente.
        2. **Configuración del Sistema de Archivos**:
            - En el archivo **`config/filesystems.php`**, Laravel permite configurar varios sistemas de archivos, como **`local`**, **`public`**, **`s3`**, entre otros.
            - Cada sistema de archivos tiene una configuración específica que define la ubicación física donde se almacenarán los archivos y las opciones de visibilidad y acceso.
        3. **Almacenamiento de Archivos en el Controlador**:
            - En el controlador **`FileController`**, se manejan las solicitudes relacionadas con el almacenamiento y la recuperación de archivos.
            - El método **`store`** se encarga de almacenar un archivo enviado mediante un formulario en el sistema de archivos.
            - Se utiliza el método **`storeAs`** del objeto **`Storage`** para almacenar el archivo con un nombre específico en una ubicación determinada.
        
        ```php
        phpCopy code
        public function store(Request $request)
        {
            $path = $request->file('file')->storeAs('uploads', $request->file('file')->getClientOriginalName());
            return response()->json(['path' => $path]);
        }
        
        ```
        
        1. **Rutas y Vistas**:
            - Las rutas en **`web.php`** se definen para manejar las solicitudes relacionadas con el almacenamiento de archivos.
            - En la vista **`file.blade.php`**, se proporciona un formulario simple para cargar archivos.
        
        ```
        bladeCopy code
        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" id="file">
            <button type="submit">Upload</button>
        </form>
        
        ```
        
        1. **Controlador FileController**:
            - El método **`store`** del controlador **`FileController`** es responsable de manejar la solicitud de almacenamiento de archivos.
            - Se recibe el archivo enviado a través del formulario y se utiliza el método **`storeAs`** del objeto **`Storage`** para almacenar el archivo en la ubicación deseada.
            - Además, se devuelve una respuesta JSON con la ruta del archivo almacenado.
        
        ```php
        phpCopy code
        public function store(Request $request)
        {
            $path = $request->file('file')->storeAs('uploads', $request->file('file')->getClientOriginalName());
            return response()->json(['path' => $path]);
        }
        
        ```
        
        1. **Vista file.blade.php**:
            - En la vista **`file.blade.php`**, se proporciona un formulario simple para que el usuario cargue archivos.
            - El formulario envía una solicitud POST a la ruta definida para el método **`store`** del controlador **`FileController`**.
            - El atributo **`enctype="multipart/form-data"`** es esencial para enviar archivos a través de formularios HTML.
        
        ```html
        htmlCopy code
        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" id="file">
            <button type="submit">Upload</button>
        </form>
        
        ```
        
        1. **Configuración del Sistema de Archivos**:
            - Laravel permite configurar múltiples sistemas de archivos en el archivo **`config/filesystems.php`**.
            - En este caso, el sistema de archivos **`local`** se utiliza para almacenar los archivos en el sistema de archivos de la aplicación.
        
        ```php
        phpCopy code
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],
        
        ```
        
        1. **Rutas en web.php**:
            - Las rutas necesarias para manejar las solicitudes relacionadas con el almacenamiento de archivos se definen en el archivo **`web.php`**.
            - La ruta POST **`/file`** está asociada al método **`store`** del controlador **`FileController`**.
        
        ```php
        phpCopy code
        Route::post('/file', [FileController::class, 'store'])->name('file.store');
        
        ```
        
        En resumen, el commit "file-storage" implementa la funcionalidad de almacenamiento de archivos en Laravel utilizando el sistema de archivos de la aplicación. Se proporciona un controlador para manejar las solicitudes de almacenamiento, así como una vista para cargar archivos desde el navegador del usuario. Este enfoque proporciona una manera conveniente y segura de trabajar con archivos en aplicaciones Laravel.
        
        ## Sobre el archivo `config/filesystem.php`
        
        En Laravel, el archivo **`config/filesystems.php`** es donde se define la configuración para varios sistemas de archivos que la aplicación puede utilizar para almacenar y recuperar archivos. Aquí hay más detalles sobre algunos de los sistemas de archivos más comunes:
        
        1. **Sistema de Archivos Local (`local`)**:
            - Este es el sistema de archivos predeterminado en Laravel.
            - Almacena archivos en el sistema de archivos de la aplicación, generalmente en la carpeta **`storage/app`**.
            - Es útil para el almacenamiento local de archivos, como imágenes de perfil de usuario o archivos cargados por los usuarios.
        
        ```php
        phpCopy code
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],
        
        ```
        
        1. **Sistema de Archivos Público (`public`)**:
            - Este sistema de archivos es similar al sistema de archivos local, pero está destinado a archivos que deben ser accesibles públicamente a través de la web.
            - Los archivos almacenados en este sistema pueden ser servidos directamente a través de la URL de la aplicación.
            - Los archivos se almacenan en la carpeta **`storage/app/public`** y se enlazan simbólicamente a la carpeta **`public/storage`** utilizando el comando **`php artisan storage:link`**.
        
        ```php
        phpCopy code
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        
        ```
        
        1. **Sistema de Archivos S3 (`s3`)**:
            - Este sistema de archivos utiliza Amazon Simple Storage Service (S3) para almacenar archivos en la nube.
            - Es útil para aplicaciones que requieren un almacenamiento escalable y distribuido.
            - Se requieren credenciales de AWS para configurar este sistema de archivos.
        
        ```php
        phpCopy code
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],
        
        ```
        
        Estos son solo algunos ejemplos de sistemas de archivos que se pueden configurar en Laravel. Dependiendo de los requisitos de tu aplicación, puedes elegir el sistema de archivos que mejor se adapte a tus necesidades de almacenamiento y acceso a archivos. La configuración en **`config/filesystems.php`** te permite personalizar cómo y dónde se almacenan tus archivos en tu aplicación Laravel.
        
        ## Gestion de pagos con Stripe en Laravel Cashier
        
        Laravel Cashier es una biblioteca de Laravel que simplifica la integración de pagos recurrentes con servicios de facturación como Stripe y Braintree. Te explicaré cómo implementar pagos recurrentes con Stripe utilizando Laravel Cashier, incluyendo la configuración de las API keys. Aquí tienes una guía paso a paso:
        
        1. **Instalación de Laravel Cashier**:
            - Comienza instalando Laravel Cashier a través de Composer:
                
                ```bash
                bashCopy code
                composer require laravel/cashier
                
                ```
                
        2. **Configuración de Stripe**:
            - Regístrate en Stripe (si aún no lo has hecho) y obtén tus claves de API de prueba y producción desde tu panel de control de Stripe.
            - Abre el archivo **`.env`** de tu aplicación Laravel y agrega tus claves de Stripe:
                
                ```makefile
                makefileCopy code
                STRIPE_KEY=tu_stripe_key
                STRIPE_SECRET=tu_stripe_secret
                
                ```
                
        3. **Configuración de Cashier**:
            - Publica las migraciones de Cashier ejecutando el siguiente comando, si quisieras modificar algo de las migraciones:
                
                ```arduino
                arduinoCopy code
                php artisan vendor:publish --tag="cashier-migrations"
                
                ```
                
            - Ejecuta las migraciones para crear las tablas necesarias en la base de datos:
                
                ```
                Copy code
                php artisan migrate
                
                ```
                
        4. **Implementación de Pagos Recurrentes**:
            - Para crear una suscripción recurrente, simplemente utiliza el método **`newSubscription`** en un modelo de usuario, en este caso `User.php`:
                
                ```php
                phpCopy code
                use Laravel\Cashier\Billable;
                
                class User extends Authenticatable
                {
                    use Billable;
                }
                
                ```
                
            - Para crear una suscripción, llama al método **`newSubscription`** en una instancia del modelo de usuario:
                
                ```php
                phpCopy code
                $user->newSubscription('plan_id', 'plan_stripe_id')->create($paymentMethod);
                
                ```
                
        5. **Gestión de API Keys**:
            - Laravel Cashier utiliza automáticamente las claves de API configuradas en tu archivo **`.env`** para comunicarse con Stripe.
            - Asegúrate de mantener tus claves de API seguras y no las compartas en tu código fuente público.
        6. **Ejemplo de Creación de Suscripción**:
            - Supongamos que tienes un controlador donde gestionas la suscripción del usuario:
                
                ```php
                phpCopy code
                use Illuminate\Http\Request;
                use App\Models\User;
                
                class SubscriptionController extends Controller
                {
                    public function subscribe(Request $request)
                    {
                        $user = $request->user();
                        $paymentMethod = $request->payment_method;
                
                        $user->newSubscription('monthly', 'plan_stripe_id')->create($paymentMethod);
                
                        return response()->json(['message' => 'Subscription created successfully']);
                    }
                }
                
                ```
                
        
        Esta es una introducción básica sobre cómo implementar pagos recurrentes con Stripe utilizando Laravel Cashier. Asegúrate de consultar la documentación oficial de Laravel Cashier y Stripe para obtener más detalles y funcionalidades avanzadas.
        
    
    ## Manejo de fechas de subscripción
    
    1. **Añadir el archivo stripe.php dentro de config**:
        - Crea un nuevo archivo llamado **`stripe.php`** dentro del directorio **`config`** (si no existe) y añade las claves de Stripe:
            
            ```php
            phpCopy code
            return [
                'stripe_key' => env('STRIPE_KEY'),
                'stripe_secret' => env('STRIPE_SECRET'),
            ];
            
            ```
            
    2. **Añadir rutas para el checkout y billing portal en routes/web.php**:
        - Abre el archivo **`routes/web.php`** y añade las siguientes rutas:
            
            ```php
            phpCopy code
            use Illuminate\Http\Request;
            use Laravel\Cashier\Http\Controllers\CheckoutController;
            use Laravel\Cashier\Http\Controllers\BillingPortalController;
            
            Route::get('/checkout', [CheckoutController::class, 'show']);
            Route::post('/checkout', [CheckoutController::class, 'store']);
            Route::get('/billing-portal', [BillingPortalController::class, 'show']);
            ```
            
    3. **Añadir trial_ends_at al registrar usuarios**:
        - Modifica tu proceso de registro de usuarios para incluir la fecha de finalización del período de prueba. Puedes hacerlo en tu controlador de registro (por ejemplo, **`RegisterController`**).
    4. **Convertir la propiedad trial_ends_at del usuario a datetime**:
        - Puedes utilizar mutadores de Eloquent para convertir automáticamente la propiedad **`trial_ends_at`** a un objeto DateTime en tu modelo **`User`**. Por ejemplo:
            
            ```php
            
            protected $dates = ['trial_ends_at'];
            ```
            
    5. **Añadir alerta de free trial end en resources/views/layouts/app.blade.php**:
        - Añade una alerta en tu archivo de diseño (**`resources/views/layouts/app.blade.php`**) para notificar a los usuarios cuando su período de prueba esté a punto de finalizar.
    
    Con estos pasos, habrás integrado Laravel con Stripe utilizando Laravel Cashier y habrás configurado correctamente las funcionalidades relacionadas con los períodos de prueba y las suscripciones de usuario.
    
    ## Consola de Stripe en nuestro proyecto
    
    Para acceder a la consola de Stripe y utilizar el ejecutable **`stripe.exe`**, primero necesitarás descargar el binario de Stripe y descomprimirlo en tu sistema. Aquí tienes una guía paso a paso:
    
    1. **Descargar el binario de Stripe**:
        - Visita el sitio web oficial de Stripe y dirígete a la sección de descargas o herramientas para desarrolladores.
        - Busca la opción para descargar el binario de Stripe para tu sistema operativo. Stripe ofrece binarios para diferentes sistemas operativos como Windows, macOS y Linux.
        - Descarga el binario adecuado para tu sistema operativo.
    2. **Descomprimir el binario**:
        - Una vez que hayas descargado el archivo ZIP que contiene el binario de Stripe, deberás descomprimirlo. Puedes hacerlo utilizando el software de descompresión de archivos de tu sistema operativo.
        - Por ejemplo, si estás en un sistema basado en Unix (como Linux o macOS), puedes utilizar el comando **`unzip`** en la terminal para descomprimir el archivo. Por ejemplo:
            
            ```python
            unzip stripe-cli-*.zip
            
            ```
            
        - Si estás en Windows, puedes utilizar el explorador de archivos para descomprimir el archivo ZIP haciendo clic derecho sobre él y seleccionando "Extraer aquí" o utilizando un software de descompresión de archivos de terceros.
    3. **Acceder a la consola de Stripe**:
        - Una vez que hayas descomprimido el archivo, encontrarás el ejecutable **`stripe.exe`** (o simplemente **`stripe`** en sistemas basados en Unix) en la carpeta resultante.
        - Abre una terminal o ventana de comandos y navega hasta la ubicación donde se encuentra el ejecutable **`stripe`**.
        - Ejecuta el comando **`./stripe.exe`** (o **`./stripe`** en sistemas basados en Unix) para iniciar la consola de Stripe.
        - Ahora deberías poder utilizar la consola de Stripe para interactuar con tu cuenta de Stripe, administrar tus datos, realizar pruebas y más.
    
    Recuerda que es posible que necesites otorgar permisos de ejecución al archivo **`stripe.exe`** si estás en un sistema basado en Unix. Puedes hacerlo utilizando el comando **`chmod +x stripe`** en la terminal antes de ejecutarlo.
    
    La consola de Stripe es una herramienta poderosa que permite a los desarrolladores interactuar directamente con la API de Stripe desde la línea de comandos de su sistema. Proporciona una interfaz conveniente para realizar una variedad de tareas, como crear y gestionar productos, clientes, suscripciones, pagos, pruebas de webhook y más, sin necesidad de escribir código.
    
    Aquí hay algunas razones por las que la consola de Stripe es importante:
    
    1. **Facilita el desarrollo y la depuración**: La consola permite a los desarrolladores probar y depurar sus integraciones con la API de Stripe de manera rápida y eficiente. Pueden enviar solicitudes directamente a la API y recibir respuestas en tiempo real, lo que facilita la identificación y solución de problemas.
    2. **Gestión de datos**: Los desarrolladores pueden utilizar la consola para administrar sus datos en Stripe, como clientes, productos, planes de suscripción, descuentos, etc. Esto proporciona una forma conveniente de realizar tareas administrativas sin tener que escribir scripts o utilizar la interfaz web de Stripe.
    3. **Pruebas y simulaciones**: La consola permite realizar pruebas en un entorno controlado utilizando datos de prueba y simular diferentes escenarios de pago. Esto es útil para verificar el comportamiento de la aplicación en diferentes situaciones antes de implementarla en producción.
    
    El comando **`./stripe.exe login --api-key STRIPE_SECRET` (RECUERDA QUE STRIPE_SECRET ES UNA VARIABLE DE ENTORNO QUE HEMOS CREANDO EN `.env` PARA ALMACENAR LA CLAVE PRIVADA DE NUESTRA APP QUE HEMOS EXTRAIDO DE LA PLATAFORMA STRIPE)** es utilizado para autenticarse en la consola de Stripe utilizando una clave API secreta de Stripe. Aquí hay una explicación de cada parte del comando:
    
    - **`./stripe.exe`**: Es el ejecutable de la consola de Stripe.
    - **`login`**: Es el comando para iniciar sesión en la consola de Stripe.
    - **`-api-key STRIPE_SECRET`**: Es un argumento que se utiliza para proporcionar la clave API secreta de Stripe (**`STRIPE_SECRET`**) como método de autenticación. Esta clave API es necesaria para acceder a los recursos protegidos de la API de Stripe, como clientes, pagos, suscripciones, etc.
    
    En resumen, el comando **`./stripe.exe login --api-key STRIPE_SECRET`** es fundamental para iniciar sesión en la consola de Stripe y comenzar a utilizar sus funciones para interactuar con la API de Stripe de manera segura y eficiente
    
    ## Middleware
    
    Un middleware en el contexto de Laravel es una capa intermedia que se ejecuta entre la recepción de una solicitud HTTP y la respuesta generada por la aplicación. Su función principal es interceptar la solicitud entrante y realizar acciones específicas, como autenticación, autorización, transformación de datos, registro de solicitudes, entre otros, antes de que la solicitud llegue a su destino final, que puede ser un controlador o una ruta.
    
    Para declarar un middleware en Laravel, primero debes crear una clase middleware que implemente la lógica deseada. Luego, debes registrar el middleware en el archivo **`app/Http/Kernel.php`**, dentro del arreglo **`$middleware`** o **`$routeMiddleware`**, dependiendo de si deseas que el middleware se aplique a todas las solicitudes HTTP o solo a rutas específicas.
    
    Ahora, revisemos cómo se usa el middleware **`EnsureUserIsSubscribed`** en el commit "add-subscriptions" de este repositorio.
    
    Primero, echemos un vistazo al archivo **`app/Http/Kernel.php`**
    
    ```php
    phpCopy code
    protected $routeMiddleware = [
        // Otros middlewares...
        'subscribed' => \App\Http\Middleware\EnsureUserIsSubscribed::class,
    ];
    ```
    
    Aquí, se registra el middleware **`EnsureUserIsSubscribed`** bajo el nombre de **`'subscribed'`** en el arreglo **`$routeMiddleware`**. Esto permite que el middleware sea utilizado en las definiciones de rutas de la aplicación.
    
    Ahora, veamos cómo se usa este middleware en una ruta específica en el archivo **`routes/web.php`**:
    
    ```php
    phpCopy code
    Route::get('/premium-content', function () {
        //
    })->middleware('subscribed');
    
    ```
    
    En esta ruta, se aplica el middleware **`'subscribed'`**, que es una instancia de **`EnsureUserIsSubscribed`**, lo que significa que cualquier solicitud a la URL **`/premium-content`** pasará a través de este middleware antes de llegar al controlador o al cierre de la ruta.
    
    Ahora, hablemos sobre las nuevas funcionalidades agregadas en el commit "add-subscriptions". 
    
    1. **Middleware EnsureUserIsSubscribed**:
        - En el archivo **`app/Http/Middleware/EnsureUserIsSubscribed.php`**, has agregado un nuevo middleware llamado **`EnsureUserIsSubscribed`**.
        - Este middleware se encarga de verificar si el usuario actual está suscrito. Si no lo está, redirige al usuario a la ruta **`subscribe`**, que aparentemente es la ruta para suscripciones.
    2. **Actualización del Kernel.php**:
        - En el archivo **`app/Http/Kernel.php`**, has registrado el nuevo middleware **`EnsureUserIsSubscribed`** en la propiedad **`$routeMiddleware`**.
    3. **Nuevas rutas**:
        - En el archivo **`routes/web.php`**, se ha definido nuevas rutas para manejar la suscripción de usuarios. Estas rutas incluyen:
            - Una ruta **`subscribe`** para mostrar el formulario de suscripción.
            - Una ruta **`checkout`** para procesar el pago y completar la suscripción.
            - Una ruta **`billing-portal`** para permitir al usuario acceder al portal de facturación de Stripe.
    4. **Configuración de Stripe**:
        - Agregado un archivo de configuración **`stripe.php`** en el directorio **`config`**. Este archivo probablemente contiene las claves de API de Stripe y otras configuraciones relacionadas con Stripe.
    
    En resumen, se han agregado funcionalidades relacionadas con las suscripciones de usuarios utilizando Stripe. Se ha creado un middleware para asegurarnos de que los usuarios estén suscritos antes de acceder a ciertas partes de la aplicación, se han definido las rutas necesarias y se han configurado los archivos de Stripe para manejar los pagos y la facturación. 
    
    ## Validacion de email unico
    
    En este commit (**email_unique_validation-added**), se agregó validación para garantizar que las direcciones de correo electrónico sean únicas durante el registro de usuarios. Aquí está un resumen de los cambios realizados:
    
    1. **Modificación del archivo de migración**:
        - Se modificó el archivo de migración correspondiente para agregar una restricción de unicidad a la columna de correo electrónico en la tabla de usuarios. Esta restricción garantiza que no se puedan registrar múltiples usuarios con la misma dirección de correo electrónico.
    2. **Actualización del archivo de modelo User**:
        - Se realizó una actualización en el modelo **`User`** para incluir la regla de validación de unicidad en la propiedad **`$rules`**. Esta regla se aplicará al intentar crear un nuevo usuario para asegurarse de que la dirección de correo electrónico proporcionada sea única en la base de datos.
    3. **Mensaje de error personalizado**:
        - Se agregó un mensaje de error personalizado para la regla de validación de unicidad en el archivo de idioma correspondiente. Este mensaje se mostrará al usuario si intenta registrarse con una dirección de correo electrónico que ya está en uso.

## Relacion Eloquent n a n

[Documentación oficial de Laravel para las relaciones](https://laravel.com/docs/8.x/eloquent-relationships#main-content)

### Artisan Tinker

El **`php artisan tinker`** es una herramienta poderosa que nos permite interactuar con nuestra aplicación Laravel a través de una interfaz de línea de comandos (CLI). Aquí hay algunos de los comandos más conocidos y útiles que se pueden utilizar:

1. **Crear registros en la base de datos**: Con Tinker, podemos crear registros en la base de datos de forma rápida y sencilla. Por ejemplo, podemos crear un nuevo usuario utilizando el modelo **`User`**:
    
    ```php
    phpCopy code
    $user = new App\Models\User();
    $user->name = 'John Doe';
    $user->email = 'john@example.com';
    $user->password = bcrypt('password');
    $user->save();
    
    ```
    
2. **Consultas de base de datos**: Podemos ejecutar consultas de Eloquent para recuperar datos de la base de datos. Por ejemplo, para obtener todos los usuarios, podemos usar:
    
    ```php
    phpCopy code
    $users = App\Models\User::all();
    
    ```
    
3. **Actualizar registros**: También podemos actualizar registros existentes utilizando Tinker. Por ejemplo, para cambiar el nombre de un usuario:
    
    ```php
    phpCopy code
    $user = App\Models\User::find(1);
    $user->name = 'Jane Doe';
    $user->save();
    
    ```
    
4. **Eliminar registros**: Podemos eliminar registros de la base de datos utilizando Tinker. Por ejemplo, para eliminar un usuario:
    
    ```php
    phpCopy code
    $user = App\Models\User::find(1);
    $user->delete();
    ```
    

En este proyecto, podríamos aprovecharlo para realizar pruebas rápidas de nuestros modelos y relaciones, así como para verificar el funcionamiento de ciertas consultas de base de datos antes de implementarlas en nuestro código. También podría ser útil para realizar operaciones de mantenimiento en la base de datos durante el desarrollo, como la creación de registros de prueba o la limpieza de datos. En definitiva, **`artisan tinker`** es una herramienta versátil que puede facilitar el desarrollo y la depuración de nuestra aplicación Laravel.

### Sintaxis

La sintaxis básica de **`artisan tinker`** es bastante simple. Simplemente ejecutas el comando **`php artisan tinker`** en tu terminal y esto abrirá un shell interactivo donde puedes interactuar con tu aplicación Laravel.

Aquí tienes un ejemplo de cómo se ve la sintaxis:

```bash
bashCopy code
php artisan tinker

```

Una vez que ingreses este comando, verás un prompt similar a **`>>>`**, que indica que estás dentro del shell interactivo de Tinker. A partir de aquí, puedes escribir código PHP como lo harías en un archivo regular de PHP. Por ejemplo:

```php
phpCopy code
>>> $user = new App\Models\User();
>>> $user->name = 'John Doe';
>>> $user->email = 'john@example.com';
>>> $user->password = bcrypt('password');
>>> $user->save();

```

Este es solo un ejemplo básico, pero puedes ejecutar cualquier código PHP válido en el shell de Tinker para interactuar con tu aplicación Laravel. Una vez que hayas terminado de usar Tinker, simplemente escribe **`exit`** o presiona **`Ctrl + D`** para salir del shell interactivo.

Por ejemplo, si ejecutas **`Contact::find(25)`** en **`artisan tinker`**, obtendrás el modelo **`Contact`** cuyo ID es 25 si existe en tu base de datos. Si no existe un registro con el ID 25 en la tabla **`contacts`**, entonces se devolverá **`null`**.

Aquí hay un ejemplo de cómo se vería en **`artisan tinker`**:

```php
phpCopy code
>>> $contact = Contact::find(25);

```

Si hay un contacto con el ID 25 en la base de datos, **`$contact`** contendrá ese modelo. De lo contrario, será **`null`**.

### Usando Eloquent

El commit "share-contact" de nuestro proyecto, introduce la funcionalidad de compartir contactos entre usuarios en la aplicación. Aquí hay un desglose de cómo funciona y cómo se ha implementado:

1. **Nuevas rutas**: Se han agregado nuevas rutas en el archivo **`web.php`** para manejar las acciones relacionadas con compartir contactos. Por ejemplo:
    
    ```php
    phpCopy code
    Route::post('/contacts/{contact}/share', [ContactController::class, 'share'])->name('contacts.share');
    
    ```
    
2. **Controlador**: En el controlador **`ContactController`**, se ha agregado un nuevo método llamado **`share`** que maneja la lógica para compartir un contacto específico. Aquí se puede verificar la autenticidad del usuario y realizar las acciones necesarias para compartir el contacto:
    
    ```php
    phpCopy code
    public function share(Contact $contact)
    {
        // Verificar la autenticación del usuario
        if (!auth()->check()) {
            return redirect()->route('login');
        }
    
        // Lógica para compartir el contacto
        // ...
    
        // Redirigir a la página de contacto con un mensaje de éxito
        return redirect()->route('contacts.show', $contact->id)->with('success', 'Contact shared successfully!');
    }
    
    ```
    
3. **Vistas**: .

La vista **`contact-shares/create.blade.php`**. Esta vista parece ser utilizada para crear un nuevo contacto compartido entre dos usuarios. Aquí hay un análisis de la vista y cómo se utiliza:

- La vista se basa en la plantilla principal **`layouts.app.blade.php`**, que generalmente contiene la estructura común de la interfaz de usuario de la aplicación.
- En el contenido de la vista, hay un formulario HTML que permite al usuario ingresar el correo electrónico del contacto y el correo electrónico del usuario con el que se compartirá el contacto.
- El formulario envía los datos al servidor a través de una solicitud POST a la ruta **`contact-shares.store`**, lo que sugiere que la acción de creación del contacto compartido se manejará en un método **`store`** del controlador asociado.
- Se proporcionan campos de entrada para el correo electrónico del contacto (**`contact_email`**) y el correo electrónico del usuario (**`user_email`**). Estos campos están sujetos a validación y muestran mensajes de error si los datos proporcionados no son válidos.
- Hay un botón de envío que permite al usuario enviar el formulario y crear el contacto compartido.

En resumen, esta vista proporciona una interfaz para que los usuarios ingresen la información necesaria para crear un nuevo contacto compartido. Una vez que se completa y envía el formulario, los datos se envían al servidor para su procesamiento adicional

1. **Lógica de negocios**: Dentro del método **`share`** del controlador, se puede implementar la lógica específica para compartir el contacto, como enviar una notificación al usuario destinatario, registrar la acción de compartir en el registro de actividad, etc.

En resumen, esta funcionalidad permite a los usuarios compartir contactos específicos con otros usuarios de la aplicación. Mediante el uso de rutas, controladores y posiblemente vistas, se ha implementado una solución que facilita el proceso de compartir contactos y mejora la experiencia del usuario en la aplicación.

## Queries sobre tablas pivote

El commit [9c8ee606](https://github.com/GreenyHat/Laravel-Lab/commit/9c8ee60607670d693e274ad7a2163df7ec655813), introduce una serie de cambios significativos en el control de compartición de contactos en la aplicación Laravel-Lab. Aquí está el desglose de los cambios realizados:

1. **Controlador ContactShareController.php**:
    - Se ha agregado lógica para las acciones de compartir y dejar de compartir contactos.
    - En el método **`store`**, se valida la entrada del formulario para garantizar que los correos electrónicos proporcionados sean válidos y que el usuario no esté compartiendo el contacto consigo mismo. Luego, se busca el usuario y el contacto en la base de datos y se realiza la asociación.
    - El método **`destroy`** permite dejar de compartir un contacto. Se busca la entrada en la tabla de **`contact_shares`** y se elimina la asociación.
2. **Política de autorización ContactPolicy.php**:
    - Se define la lógica de autorización para determinar quién puede ver y actualizar los contactos.
    - El método **`view`** permite que un usuario vea un contacto si es el propietario del contacto o si el contacto ha sido compartido con el usuario.
    - Los métodos **`update`** y **`delete`** permiten que un usuario actualice o elimine un contacto solo si es el propietario del contacto.
3. **Vista index.blade.php en la carpeta contact-shares**:
    - Esta vista muestra los contactos compartidos con el usuario y los contactos compartidos por el usuario.
    - Se itera sobre los contactos compartidos con el usuario y se muestran los detalles, incluido el nombre, correo electrónico, número de teléfono y quién lo compartió.
    - Se proporciona un formulario para dejar de compartir un contacto compartido por el usuario.
4. **Vista app.blade.php**:
    - Esta plantilla Blade define la estructura básica de la interfaz de usuario de la aplicación.
    - Incluye un menú de navegación con enlaces para acceder a diferentes partes de la aplicación, como los contactos compartidos, compartir contactos, mis contactos, etc.
    - Además, maneja la visualización de mensajes de alerta, como mensajes de éxito o información sobre el estado del período de prueba gratuito.

En resumen, este commit mejora la funcionalidad de compartir contactos en la aplicación Laravel-Lab, permitiendo a los usuarios compartir contactos con otros usuarios y dejar de compartirlos cuando sea necesario. La implementación incluye validación de datos, lógica de autorización y actualización de la interfaz de usuario para reflejar estos cambios.

Mas detalles sobre los componentes del commit

1. **Controlador ContactShareController.php**:
    - El método **`store`** recibe la solicitud HTTP para compartir un contacto. Valida los correos electrónicos proporcionados y busca los usuarios y contactos correspondientes en la base de datos.
    - Una vez validados, se verifica si el contacto ya ha sido compartido con el usuario objetivo. Si no lo está, se crea una nueva entrada en la tabla **`contact_shares`** para registrar la relación de compartir.
    - El método **`destroy`** elimina la entrada correspondiente en la tabla **`contact_shares`**, revocando así el acceso compartido a un contacto.
2. **Política de autorización ContactPolicy.php**:
    - La política define quién puede ver y manipular los contactos. En el método **`view`**, se permite la visualización si el usuario es el propietario del contacto o si el contacto ha sido compartido con el usuario.
    - Los métodos **`update`** y **`delete`** autorizan las acciones de actualización y eliminación solo para el propietario del contacto.
3. **Vista index.blade.php en la carpeta contact-shares**:
    - Muestra los contactos compartidos con el usuario y los contactos compartidos por el usuario.
    - Itera sobre los contactos compartidos y muestra detalles como nombre, correo electrónico, número de teléfono y quien los compartió.
    - Proporciona un formulario para dejar de compartir un contacto compartido por el usuario.
4. **Vista app.blade.php**:
    - Define la estructura básica de la interfaz de usuario.
    - Incluye un menú de navegación y maneja mensajes de alerta.
5. **Variable `$contact`**:
    - Se utiliza para representar un contacto específico en los métodos del controlador y en las vistas.
    - Se accede a través de los modelos Eloquent **`Contact`**.
6. **Variable `$contactShare`**:
    - Se utiliza en el método **`destroy`** para recuperar los detalles de la relación de compartir contacto de la base de datos.
    - Se utiliza para obtener información específica sobre el contacto compartido que se va a dejar de compartir.

Estos cambios mejoran la funcionalidad de compartir contactos en la aplicación, implementando la lógica necesaria para compartir y dejar de compartir contactos de manera segura y eficiente.

## Correos automatizados y caché