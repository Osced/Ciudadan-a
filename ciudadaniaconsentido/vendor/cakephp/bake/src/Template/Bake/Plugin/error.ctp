undefined:
Internal Server Error [500]
.
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Error: Element file &quot;Element\forms\form_eliminarMienbro.ctp&quot; is missing.    </title>
    <link href="/ciudadaniaconsentido/favicon.ico" type="image/x-icon" rel="icon"/><link href="/ciudadaniaconsentido/favicon.ico" type="image/x-icon" rel="shortcut icon"/>    <style>
    body {
        font: 14px helvetica, arial, sans-serif;
        color: #222;
        background-color: #f8f8f8;
        padding:0;
        margin: 0;
        max-height: 100%;
    }

    .code-dump,
    pre {
        background: #fefefe;
        border: 1px solid #ddd;
        padding: 5px;
        white-space: pre-wrap;
    }

    header {
        background-color: #C3232D;
        color: #ffffff;
        padding: 16px 10px;
        border-bottom: 3px solid #626262;
    }
    .header-title {
        margin: 0;
        font-weight: normal;
        font-size: 30px;
        line-height: 64px;
    }
    .header-type {
        opacity: 0.75;
        display: block;
        font-size: 16px;
        line-height: 1;
    }
    .header-help {
        font-size: 12px;
        line-height: 1;
        position: absolute;
        top: 30px;
        right: 16px;
    }
    .header-help a {
        color: #fff;
    }

    .error-nav {
        float: left;
        width: 30%;
    }
    .error-contents {
        padding: 10px 1%;
        float: right;
        width: 68%;
    }

    .error,
    .error-subheading {
        font-size: 18px;
        margin-top: 0;
        padding: 10px;
        border: 1px solid #EDBD26;
    }
    .error-subheading {
        background: #1798A5;
        color: #fff;
        border: 1px solid #02808C;
    }
    .error {
        background: #ffd54f;
    }
    .customize {
        opacity: 0.6;
    }

    .stack-trace {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .stack-frame {
        padding: 10px;
        border-bottom: 1px solid #212121;
    }
    .stack-frame:last-child {
        border-bottom: none;
    }
    .stack-frame a {
        display: block;
        color: #212121;
        text-decoration: none;
    }
    .stack-frame.active {
        background: #e5e5e5;
    }
    .stack-frame a:hover {
        text-decoration: underline;
    }
    .stack-file,
    .stack-function {
        display: block;
        margin-bottom: 5px;
    }

    .stack-frame-file,
    .stack-file {
        font-family: consolas, monospace;
    }
    .stack-function {
        font-weight: bold;
    }
    .stack-file {
        font-size: 0.9em;
        word-wrap: break-word;
    }

    .stack-details {
        background: #ececec;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        border: 1px solid #ababab;
        padding: 10px;
        margin-bottom: 18px;
    }
    .stack-frame-args {
        float: right;
    }

    .toggle-link {
        color: #1798A5;
        text-decoration: none;
    }
    .toggle-link:hover {
        text-decoration: underline;
    }
    .toggle-vendor-frames {
        padding: 5px;
        display: block;
        text-align: center;
    }

    .code-excerpt {
        width: 100%;
        margin: 5px 0;
        background: #fefefe;
    }
    .code-highlight {
        display: block;
        background: #fff59d;
    }
    .excerpt-line {
        padding-left: 2px;
    }
    .excerpt-number {
        background: #f6f6f6;
        width: 50px;
        text-align: right;
        color: #666;
        border-right: 1px solid #ddd;
        padding: 2px;
    }
    .excerpt-number:after {
        content: attr(data-number);
    }

    table {
        text-align: left;
    }
    th, td {
        padding: 4px;
    }
    th {
        border-bottom: 1px solid #ccc;
    }
    </style>
</head>
<body>
    <header>
        <h1 class="header-title">
            Element file &quot;Element\forms\form_eliminarMienbro.ctp&quot; is missing.            <span class="header-type">Cake\View\Exception\MissingElementException</span>
        </h1>
        <div class="header-help">
            <a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a>
            <a target="_blank" href="https://api.cakephp.org/">API</a>
        </div>
    </header>

    <div class="error-contents">


    <div id="stack-frame-0" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\src\Template\Colectivos\invitar.ctp</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-0">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="-1"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="0"></td>
                <td class="excerpt-line"><code><span style="color: #000000">&lt;?php</span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;$response_msg&nbsp;</span><span style="color: #007700">=&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">element</span><span style="color: #007700">(</span><span style="color: #DD0000">'forms/form_eliminarMienbro'</span><span style="color: #007700">,[</span><span style="color: #DD0000">'usuario'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$usuario</span><span style="color: #007700">,</span><span style="color: #DD0000">'colectivo'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$colectivo</span><span style="color: #007700">]);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="2"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;$response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'{"id":"OK","msg":"OK","form":"'</span><span style="color: #007700">.</span><span style="color: #0000BB">$response_msg</span><span style="color: #007700">.</span><span style="color: #DD0000">'"&nbsp;}'</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="3"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="4"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">?&gt;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="5"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-0" style="display: none;">
            <pre>&#039;forms\form_eliminarMienbro&#039;
[
	&#039;usuario&#039; =&gt; object(App\Model\Entity\Usuario) {

		&#039;usuario_id&#039; =&gt; (int) 400,
		&#039;nombres&#039; =&gt; &#039;Manuel&#039;,
		&#039;apellidos&#039; =&gt; &#039;Villarreal&#039;,
		&#039;descripcion&#039; =&gt; null,
		&#039;password&#039; =&gt; &#039;$2y$10$RzAVOu8yAVLd8hC9XkZX0uBHoXVx8okaKPLgjhTWn3nZjNkjORo0K&#039;,
		&#039;username&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;,
		&#039;token&#039; =&gt; null,
		&#039;paisNacimiento_id&#039; =&gt; (int) 46,
		&#039;pais_id&#039; =&gt; (int) 46,
		&#039;ciudad_id&#039; =&gt; (int) 2259,
		&#039;sector&#039; =&gt; null,
		&#039;fecha_nacimiento&#039; =&gt; object(Cake\I18n\FrozenDate) {},
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;,
		&#039;genero&#039; =&gt; true,
		&#039;zona_horaria&#039; =&gt; (float) -5,
		&#039;activado&#039; =&gt; true,
		&#039;created&#039; =&gt; object(Cake\I18n\FrozenTime) {},
		&#039;modified&#039; =&gt; object(Cake\I18n\FrozenTime) {},
		&#039;[new]&#039; =&gt; false,
		&#039;[accessible]&#039; =&gt; [
			&#039;nombres&#039; =&gt; true,
			&#039;apellidos&#039; =&gt; true,
			&#039;password&#039; =&gt; true,
			&#039;username&#039; =&gt; true,
			&#039;descripcion&#039; =&gt; true,
			&#039;token&#039; =&gt; true,
			&#039;paisNacimiento_id&#039; =&gt; true,
			&#039;pais_id&#039; =&gt; true,
			&#039;ciudad_id&#039; =&gt; true,
			&#039;sector&#039; =&gt; true,
			&#039;fecha_nacimiento&#039; =&gt; true,
			&#039;correo&#039; =&gt; true,
			&#039;genero&#039; =&gt; true,
			&#039;zona_horaria&#039; =&gt; true,
			&#039;activado&#039; =&gt; true,
			&#039;created&#039; =&gt; true,
			&#039;modified&#039; =&gt; true,
			&#039;paise&#039; =&gt; true,
			&#039;municipio&#039; =&gt; true,
			&#039;colectivos&#039; =&gt; true,
			&#039;iniciativas&#039; =&gt; true,
			&#039;temas&#039; =&gt; true
		],
		&#039;[dirty]&#039; =&gt; [],
		&#039;[original]&#039; =&gt; [],
		&#039;[virtual]&#039; =&gt; [],
		&#039;[hasErrors]&#039; =&gt; false,
		&#039;[errors]&#039; =&gt; [],
		&#039;[invalid]&#039; =&gt; [],
		&#039;[repository]&#039; =&gt; &#039;Usuarios&#039;

	},
	&#039;colectivo&#039; =&gt; object(App\Model\Entity\Colectivo) {

		&#039;colectivo_id&#039; =&gt; (int) 131,
		&#039;nombre&#039; =&gt; &#039;colectivo de prueba&#039;,
		&#039;descripcion&#039; =&gt; &#039;Esta es un colectivo de prueba, nada mas y nada menos que eso.&#039;,
		&#039;ciudad_id&#039; =&gt; (int) 2259,
		&#039;pais_id&#039; =&gt; (int) 46,
		&#039;colectivo_tipo_id&#039; =&gt; (int) 4,
		&#039;caracter_id&#039; =&gt; (int) 4,
		&#039;verificado&#039; =&gt; false,
		&#039;eliminado&#039; =&gt; false,
		&#039;created&#039; =&gt; object(Cake\I18n\FrozenTime) {},
		&#039;modified&#039; =&gt; object(Cake\I18n\FrozenTime) {},
		&#039;usuarios&#039; =&gt; [
			(int) 0 =&gt; object(App\Model\Entity\Usuario) {},
			(int) 1 =&gt; object(App\Model\Entity\Usuario) {}
		],
		&#039;[new]&#039; =&gt; false,
		&#039;[accessible]&#039; =&gt; [
			&#039;nombre&#039; =&gt; true,
			&#039;descripcion&#039; =&gt; true,
			&#039;ciudad_id&#039; =&gt; true,
			&#039;pais_id&#039; =&gt; true,
			&#039;colectivo_tipo_id&#039; =&gt; true,
			&#039;caracter_id&#039; =&gt; true,
			&#039;verificado&#039; =&gt; true,
			&#039;eliminado&#039; =&gt; true,
			&#039;created&#039; =&gt; true,
			&#039;modified&#039; =&gt; true,
			&#039;paise&#039; =&gt; true,
			&#039;ciudade&#039; =&gt; true,
			&#039;colectivo_tipo&#039; =&gt; true,
			&#039;caractere&#039; =&gt; true,
			&#039;usuarios&#039; =&gt; true,
			&#039;iniciativas&#039; =&gt; true
		],
		&#039;[dirty]&#039; =&gt; [],
		&#039;[original]&#039; =&gt; [],
		&#039;[virtual]&#039; =&gt; [],
		&#039;[hasErrors]&#039; =&gt; false,
		&#039;[errors]&#039; =&gt; [],
		&#039;[invalid]&#039; =&gt; [],
		&#039;[repository]&#039; =&gt; &#039;Colectivos&#039;

	}
]</pre>
        </div>
    </div>
    <div id="stack-frame-1" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\View\View.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-1">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="1414"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1415"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extract</span><span style="color: #007700">(</span><span style="color: #0000BB">$dataForView</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1416"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ob_start</span><span style="color: #007700">();</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1417"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1418"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">include&nbsp;</span><span style="color: #0000BB">func_get_arg</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1419"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1420"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1421"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1422"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-1" style="display: none;">
            <pre>&#039;C:\xampp\htdocs\ciudadaniaconsentido\src\Template\Colectivos\invitar.ctp&#039;</pre>
        </div>
    </div>
    <div id="stack-frame-2" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\View\View.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-2">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="1375"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$initialBlocks&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Blocks</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">unclosed</span><span style="color: #007700">());</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1376"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1377"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dispatchEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'View.beforeRenderFile'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">]);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1378"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1379"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$content&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_evaluate</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1380"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1381"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$afterEvent&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dispatchEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'View.afterRenderFile'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">]);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1382"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$afterEvent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResult</span><span style="color: #007700">()&nbsp;!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="1383"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$content&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$afterEvent</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResult</span><span style="color: #007700">();</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-2" style="display: none;">
            <pre>&#039;C:\xampp\htdocs\ciudadaniaconsentido\src\Template\Colectivos\invitar.ctp&#039;
[
	&#039;colectivo&#039; =&gt; object(App\Model\Entity\Colectivo) {

		&#039;colectivo_id&#039; =&gt; (int) 131,
		&#039;nombre&#039; =&gt; &#039;colectivo de prueba&#039;,
		&#039;descripcion&#039; =&gt; &#039;Esta es un colectivo de prueba, nada mas y nada menos que eso.&#039;,
		&#039;ciudad_id&#039; =&gt; (int) 2259,
		&#039;pais_id&#039; =&gt; (int) 46,
		&#039;colectivo_tipo_id&#039; =&gt; (int) 4,
		&#039;caracter_id&#039; =&gt; (int) 4,
		&#039;verificado&#039; =&gt; false,
		&#039;eliminado&#039; =&gt; false,
		&#039;created&#039; =&gt; object(Cake\I18n\FrozenTime) {},
		&#039;modified&#039; =&gt; object(Cake\I18n\FrozenTime) {},
		&#039;usuarios&#039; =&gt; [
			(int) 0 =&gt; object(App\Model\Entity\Usuario) {},
			(int) 1 =&gt; object(App\Model\Entity\Usuario) {}
		],
		&#039;[new]&#039; =&gt; false,
		&#039;[accessible]&#039; =&gt; [
			&#039;nombre&#039; =&gt; true,
			&#039;descripcion&#039; =&gt; true,
			&#039;ciudad_id&#039; =&gt; true,
			&#039;pais_id&#039; =&gt; true,
			&#039;colectivo_tipo_id&#039; =&gt; true,
			&#039;caracter_id&#039; =&gt; true,
			&#039;verificado&#039; =&gt; true,
			&#039;eliminado&#039; =&gt; true,
			&#039;created&#039; =&gt; true,
			&#039;modified&#039; =&gt; true,
			&#039;paise&#039; =&gt; true,
			&#039;ciudade&#039; =&gt; true,
			&#039;colectivo_tipo&#039; =&gt; true,
			&#039;caractere&#039; =&gt; true,
			&#039;usuarios&#039; =&gt; true,
			&#039;iniciativas&#039; =&gt; true
		],
		&#039;[dirty]&#039; =&gt; [],
		&#039;[original]&#039; =&gt; [],
		&#039;[virtual]&#039; =&gt; [],
		&#039;[hasErrors]&#039; =&gt; false,
		&#039;[errors]&#039; =&gt; [],
		&#039;[invalid]&#039; =&gt; [],
		&#039;[repository]&#039; =&gt; &#039;Colectivos&#039;

	},
	&#039;usuario&#039; =&gt; object(App\Model\Entity\Usuario) {

		&#039;usuario_id&#039; =&gt; (int) 400,
		&#039;nombres&#039; =&gt; &#039;Manuel&#039;,
		&#039;apellidos&#039; =&gt; &#039;Villarreal&#039;,
		&#039;descripcion&#039; =&gt; null,
		&#039;password&#039; =&gt; &#039;$2y$10$RzAVOu8yAVLd8hC9XkZX0uBHoXVx8okaKPLgjhTWn3nZjNkjORo0K&#039;,
		&#039;username&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;,
		&#039;token&#039; =&gt; null,
		&#039;paisNacimiento_id&#039; =&gt; (int) 46,
		&#039;pais_id&#039; =&gt; (int) 46,
		&#039;ciudad_id&#039; =&gt; (int) 2259,
		&#039;sector&#039; =&gt; null,
		&#039;fecha_nacimiento&#039; =&gt; object(Cake\I18n\FrozenDate) {},
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;,
		&#039;genero&#039; =&gt; true,
		&#039;zona_horaria&#039; =&gt; (float) -5,
		&#039;activado&#039; =&gt; true,
		&#039;created&#039; =&gt; object(Cake\I18n\FrozenTime) {},
		&#039;modified&#039; =&gt; object(Cake\I18n\FrozenTime) {},
		&#039;[new]&#039; =&gt; false,
		&#039;[accessible]&#039; =&gt; [
			&#039;nombres&#039; =&gt; true,
			&#039;apellidos&#039; =&gt; true,
			&#039;password&#039; =&gt; true,
			&#039;username&#039; =&gt; true,
			&#039;descripcion&#039; =&gt; true,
			&#039;token&#039; =&gt; true,
			&#039;paisNacimiento_id&#039; =&gt; true,
			&#039;pais_id&#039; =&gt; true,
			&#039;ciudad_id&#039; =&gt; true,
			&#039;sector&#039; =&gt; true,
			&#039;fecha_nacimiento&#039; =&gt; true,
			&#039;correo&#039; =&gt; true,
			&#039;genero&#039; =&gt; true,
			&#039;zona_horaria&#039; =&gt; true,
			&#039;activado&#039; =&gt; true,
			&#039;created&#039; =&gt; true,
			&#039;modified&#039; =&gt; true,
			&#039;paise&#039; =&gt; true,
			&#039;municipio&#039; =&gt; true,
			&#039;colectivos&#039; =&gt; true,
			&#039;iniciativas&#039; =&gt; true,
			&#039;temas&#039; =&gt; true
		],
		&#039;[dirty]&#039; =&gt; [],
		&#039;[original]&#039; =&gt; [],
		&#039;[virtual]&#039; =&gt; [],
		&#039;[hasErrors]&#039; =&gt; false,
		&#039;[errors]&#039; =&gt; [],
		&#039;[invalid]&#039; =&gt; [],
		&#039;[repository]&#039; =&gt; &#039;Usuarios&#039;

	},
	&#039;sesionIniciada&#039; =&gt; [
		&#039;usuario_id&#039; =&gt; (int) 383,
		&#039;nombres&#039; =&gt; &#039;Manuel&#039;,
		&#039;apellidos&#039; =&gt; &#039;Villarreal&#039;,
		&#039;descripcion&#039; =&gt; &#039; soy ingeniero de sistemas e informatica, desarrollador de la version 2 de la plataforma  ciudadania con sentido &#039;,
		&#039;username&#039; =&gt; &#039;manolovillarreal@hotmail.com&#039;,
		&#039;paisNacimiento_id&#039; =&gt; (int) 46,
		&#039;pais_id&#039; =&gt; (int) 46,
		&#039;ciudad_id&#039; =&gt; (int) 2259,
		&#039;sector&#039; =&gt; null,
		&#039;fecha_nacimiento&#039; =&gt; object(Cake\I18n\FrozenDate) {

			&#039;time&#039; =&gt; &#039;1989-02-05T00:00:00+00:00&#039;,
			&#039;timezone&#039; =&gt; &#039;UTC&#039;,
			&#039;fixedNowTime&#039; =&gt; false

		},
		&#039;correo&#039; =&gt; &#039;manolovillarreal@hotmail.com&#039;,
		&#039;genero&#039; =&gt; true,
		&#039;zona_horaria&#039; =&gt; (float) -5,
		&#039;activado&#039; =&gt; true,
		&#039;created&#039; =&gt; object(Cake\I18n\FrozenTime) {

			&#039;time&#039; =&gt; &#039;2019-04-01T20:39:51+00:00&#039;,
			&#039;timezone&#039; =&gt; &#039;UTC&#039;,
			&#039;fixedNowTime&#039; =&gt; false

		},
		&#039;modified&#039; =&gt; object(Cake\I18n\FrozenTime) {

			&#039;time&#039; =&gt; &#039;2019-09-28T05:56:30+00:00&#039;,
			&#039;timezone&#039; =&gt; &#039;UTC&#039;,
			&#039;fixedNowTime&#039; =&gt; false

		}
	]
]</pre>
        </div>
    </div>
    <div id="stack-frame-3" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\View\View.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-3">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="875"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$viewFileName&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$view&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_getViewFileName</span><span style="color: #007700">(</span><span style="color: #0000BB">$view</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="876"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$viewFileName</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="877"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_currentType&nbsp;</span><span style="color: #007700">=&nbsp;static::</span><span style="color: #0000BB">TYPE_TEMPLATE</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="878"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dispatchEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'View.beforeRender'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #0000BB">$viewFileName</span><span style="color: #007700">]);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="879"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">Blocks</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #DD0000">'content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_render</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewFileName</span><span style="color: #007700">));</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="880"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dispatchEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'View.afterRender'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #0000BB">$viewFileName</span><span style="color: #007700">]);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="881"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="882"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="883"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">layout&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">autoLayout</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-3" style="display: none;">
            <pre>&#039;C:\xampp\htdocs\ciudadaniaconsentido\src\Template\Colectivos\invitar.ctp&#039;</pre>
        </div>
    </div>
    <div id="stack-frame-4" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Controller\Controller.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-4">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="791"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$builder</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParam</span><span style="color: #007700">(</span><span style="color: #DD0000">'action'</span><span style="color: #007700">));</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="792"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="793"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="794"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">View&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createView</span><span style="color: #007700">();</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="795"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$contents&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">View</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$view</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$layout</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="796"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setResponse</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">View</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">withStringBody</span><span style="color: #007700">(</span><span style="color: #0000BB">$contents</span><span style="color: #007700">));</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="797"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="798"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">response</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="799"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-4" style="display: none;">
            <pre>null
null</pre>
        </div>
    </div>
    <div id="stack-frame-5" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\ActionDispatcher.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-5">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="122"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">throw&nbsp;new&nbsp;</span><span style="color: #0000BB">LogicException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Controller&nbsp;actions&nbsp;can&nbsp;only&nbsp;return&nbsp;Cake\Http\Response&nbsp;or&nbsp;null.'</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="123"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="124"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="125"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAutoRenderEnabled</span><span style="color: #007700">())&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="126"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">();</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="127"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="128"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="129"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">shutdownProcess</span><span style="color: #007700">();</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="130"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">Response</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-5" style="display: none;">
            <pre>No arguments</pre>
        </div>
    </div>
    <div id="stack-frame-6" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\ActionDispatcher.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-6">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="90"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}&nbsp;else&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="91"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$controller&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">factory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="92"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="93"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="94"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_invoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="95"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParam</span><span style="color: #007700">(</span><span style="color: #DD0000">'return'</span><span style="color: #007700">))&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="96"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="97"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="98"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-6" style="display: none;">
            <pre>object(App\Controller\ColectivosController) {
	components =&gt; [
		&#039;RequestHandler&#039; =&gt; null,
		&#039;Email&#039; =&gt; null
	]
	helpers =&gt; []
	request =&gt; object(Cake\Http\ServerRequest) {
		trustProxy =&gt; false
		[protected] params =&gt; [
			[maximum depth reached]
		]
		[protected] data =&gt; [
			[maximum depth reached]
		]
		[protected] query =&gt; [[maximum depth reached]]
		[protected] cookies =&gt; [
			[maximum depth reached]
		]
		[protected] _environment =&gt; [
			[maximum depth reached]
		]
		[protected] url =&gt; &#039;colectivos/invitar&#039;
		[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
		[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
		[protected] trustedProxies =&gt; [[maximum depth reached]]
		[protected] _input =&gt; null
		[protected] _detectors =&gt; [
			[maximum depth reached]
		]
		[protected] _detectorCache =&gt; [
			[maximum depth reached]
		]
		[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {}
		[protected] uri =&gt; object(Zend\Diactoros\Uri) {}
		[protected] session =&gt; object(Cake\Http\Session) {}
		[protected] attributes =&gt; [[maximum depth reached]]
		[protected] emulatedAttributes =&gt; [
			[maximum depth reached]
		]
		[protected] uploadedFiles =&gt; [[maximum depth reached]]
		[protected] protocol =&gt; null
		[protected] requestTarget =&gt; null
		[private] deprecatedProperties =&gt; [
			[maximum depth reached]
		]
	}
	response =&gt; object(Cake\Http\Response) {

		&#039;status&#039; =&gt; (int) 200,
		&#039;contentType&#039; =&gt; &#039;text/html&#039;,
		&#039;headers&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;file&#039; =&gt; null,
		&#039;fileRange&#039; =&gt; [[maximum depth reached]],
		&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {},
		&#039;cacheDirectives&#039; =&gt; [[maximum depth reached]],
		&#039;body&#039; =&gt; &#039;&#039;

	}
	paginate =&gt; []
	View =&gt; object(App\View\AjaxView) {
		layout =&gt; &#039;default_empty&#039;
		passedArgs =&gt; [[maximum depth reached]]
		hasRendered =&gt; false
		uuids =&gt; [[maximum depth reached]]
		viewClass =&gt; null
		viewVars =&gt; [
			[maximum depth reached]
		]
		[protected] _helpers =&gt; object(Cake\View\HelperRegistry) {}
		[protected] Blocks =&gt; object(Cake\View\ViewBlock) {}
		[protected] plugin =&gt; null
		[protected] name =&gt; &#039;Colectivos&#039;
		[protected] helpers =&gt; [[maximum depth reached]]
		[protected] templatePath =&gt; &#039;Colectivos&#039;
		[protected] template =&gt; &#039;invitar&#039;
		[protected] layoutPath =&gt; null
		[protected] autoLayout =&gt; true
		[protected] _ext =&gt; &#039;.ctp&#039;
		[protected] subDir =&gt; &#039;&#039;
		[protected] theme =&gt; null
		[protected] request =&gt; object(Cake\Http\ServerRequest) {}
		[protected] response =&gt; object(Cake\Http\Response) {}
		[protected] elementCache =&gt; &#039;default&#039;
		[protected] _passedVars =&gt; [
			[maximum depth reached]
		]
		[protected] _paths =&gt; [
			[maximum depth reached]
		]
		[protected] _pathsForPlugin =&gt; [[maximum depth reached]]
		[protected] _parents =&gt; [[maximum depth reached]]
		[protected] _current =&gt; &#039;C:\xampp\htdocs\ciudadaniaconsentido\src\Template\Colectivos\invitar.ctp&#039;
		[protected] _currentType =&gt; &#039;view&#039;
		[protected] _stack =&gt; [[maximum depth reached]]
		[protected] _viewBlockClass =&gt; &#039;Cake\View\ViewBlock&#039;
		[protected] _eventManager =&gt; object(Cake\Event\EventManager) {}
		[protected] _eventClass =&gt; &#039;Cake\Event\Event&#039;
		[protected] _viewBuilder =&gt; null
	}
	passedArgs =&gt; []
	modelClass =&gt; &#039;Colectivos&#039;
	viewClass =&gt; &#039;App\View\AjaxView&#039;
	viewVars =&gt; [
		&#039;colectivo&#039; =&gt; object(App\Model\Entity\Colectivo) {},
		&#039;usuario&#039; =&gt; object(App\Model\Entity\Usuario) {},
		&#039;sesionIniciada&#039; =&gt; [
			&#039;usuario_id&#039; =&gt; (int) 383,
			&#039;nombres&#039; =&gt; &#039;Manuel&#039;,
			&#039;apellidos&#039; =&gt; &#039;Villarreal&#039;,
			&#039;descripcion&#039; =&gt; &#039; soy ingeniero de sistemas e informatica, desarrollador de la version 2 de la plataforma  ciudadania con sentido &#039;,
			&#039;username&#039; =&gt; &#039;manolovillarreal@hotmail.com&#039;,
			&#039;paisNacimiento_id&#039; =&gt; (int) 46,
			&#039;pais_id&#039; =&gt; (int) 46,
			&#039;ciudad_id&#039; =&gt; (int) 2259,
			&#039;sector&#039; =&gt; null,
			&#039;fecha_nacimiento&#039; =&gt; object(Cake\I18n\FrozenDate) {},
			&#039;correo&#039; =&gt; &#039;manolovillarreal@hotmail.com&#039;,
			&#039;genero&#039; =&gt; true,
			&#039;zona_horaria&#039; =&gt; (float) -5,
			&#039;activado&#039; =&gt; true,
			&#039;created&#039; =&gt; object(Cake\I18n\FrozenTime) {},
			&#039;modified&#039; =&gt; object(Cake\I18n\FrozenTime) {}
		]
	]
	RequestHandler =&gt; object(Cake\Controller\Component\RequestHandlerComponent) {

		&#039;components&#039; =&gt; [[maximum depth reached]],
		&#039;implementedEvents&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;_config&#039; =&gt; [
			[maximum depth reached]
		]

	}
	Flash =&gt; object(Cake\Controller\Component\FlashComponent) {

		&#039;components&#039; =&gt; [[maximum depth reached]],
		&#039;implementedEvents&#039; =&gt; [[maximum depth reached]],
		&#039;_config&#039; =&gt; [
			[maximum depth reached]
		]

	}
	Auth =&gt; object(Cake\Controller\Component\AuthComponent) {

		&#039;components&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;implementedEvents&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;_config&#039; =&gt; [
			[maximum depth reached]
		]

	}
	ResizeImage =&gt; object(App\Controller\Component\ResizeImageComponent) {

		&#039;components&#039; =&gt; [[maximum depth reached]],
		&#039;implementedEvents&#039; =&gt; [[maximum depth reached]],
		&#039;_config&#039; =&gt; [[maximum depth reached]]

	}
	Email =&gt; object(App\Controller\Component\EmailComponent) {

		&#039;components&#039; =&gt; [[maximum depth reached]],
		&#039;implementedEvents&#039; =&gt; [[maximum depth reached]],
		&#039;_config&#039; =&gt; [[maximum depth reached]]

	}
	Colectivos =&gt; object(App\Model\Table\ColectivosTable) {

		&#039;registryAlias&#039; =&gt; &#039;Colectivos&#039;,
		&#039;table&#039; =&gt; &#039;colectivos&#039;,
		&#039;alias&#039; =&gt; &#039;Colectivos&#039;,
		&#039;entityClass&#039; =&gt; &#039;App\Model\Entity\Colectivo&#039;,
		&#039;associations&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;behaviors&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;defaultConnection&#039; =&gt; &#039;default&#039;,
		&#039;connectionName&#039; =&gt; &#039;default&#039;

	}
	[protected] name =&gt; &#039;Colectivos&#039;
	[protected] _responseClass =&gt; &#039;Cake\Http\Response&#039;
	[protected] autoRender =&gt; false
	[protected] _components =&gt; object(Cake\Controller\ComponentRegistry) {

		&#039;_Controller&#039; =&gt; object(App\Controller\ColectivosController) {},
		&#039;_loaded&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;_eventManager&#039; =&gt; object(Cake\Event\EventManager) {},
		&#039;_eventClass&#039; =&gt; &#039;Cake\Event\Event&#039;

	}
	[protected] _validViewOptions =&gt; [
		(int) 0 =&gt; &#039;passedArgs&#039;
	]
	[protected] plugin =&gt; null
	[protected] _eventManager =&gt; object(Cake\Event\EventManager) {

		&#039;_listeners&#039; =&gt; [
			[maximum depth reached]
		],
		&#039;_isGlobal&#039; =&gt; false,
		&#039;_trackEvents&#039; =&gt; false,
		&#039;_generalManager&#039; =&gt; &#039;(object) EventManager&#039;,
		&#039;_dispatchedEvents&#039; =&gt; null

	}
	[protected] _eventClass =&gt; &#039;Cake\Event\Event&#039;
	[protected] _tableLocator =&gt; object(Cake\ORM\Locator\TableLocator) {
		[protected] locations =&gt; [
			[maximum depth reached]
		]
		[protected] _config =&gt; [[maximum depth reached]]
		[protected] _instances =&gt; [
			[maximum depth reached]
		]
		[protected] _fallbacked =&gt; [
			[maximum depth reached]
		]
		[protected] _options =&gt; [
			[maximum depth reached]
		]
	}
	[protected] _modelFactories =&gt; [
		&#039;Table&#039; =&gt; [
			(int) 0 =&gt; object(Cake\ORM\Locator\TableLocator) {},
			(int) 1 =&gt; &#039;get&#039;
		]
	]
	[protected] _modelType =&gt; &#039;Table&#039;
	[protected] _viewBuilder =&gt; object(Cake\View\ViewBuilder) {
		[protected] _templatePath =&gt; &#039;Colectivos&#039;
		[protected] _template =&gt; &#039;invitar&#039;
		[protected] _plugin =&gt; null
		[protected] _theme =&gt; null
		[protected] _layout =&gt; &#039;default_empty&#039;
		[protected] _autoLayout =&gt; null
		[protected] _layoutPath =&gt; null
		[protected] _name =&gt; &#039;Colectivos&#039;
		[protected] _className =&gt; &#039;App\View\AjaxView&#039;
		[protected] _options =&gt; [
			[maximum depth reached]
		]
		[protected] _helpers =&gt; [[maximum depth reached]]
		[protected] _vars =&gt; [[maximum depth reached]]
	}
}</pre>
        </div>
    </div>
    <div id="stack-frame-7" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\BaseApplication.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-7">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="230"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;@return&nbsp;\</span><span style="color: #0000BB">Psr</span><span style="color: #007700">\</span><span style="color: #0000BB">Http</span><span style="color: #007700">\</span><span style="color: #0000BB">Message</span><span style="color: #007700">\</span><span style="color: #0000BB">ResponseInterface</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="231"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*/</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="232"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__invoke</span><span style="color: #007700">(</span><span style="color: #0000BB">ServerRequestInterface&nbsp;$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">ResponseInterface&nbsp;$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">)</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="233"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="234"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDispatcher</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dispatch</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="235"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="236"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="237"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="238"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">Get&nbsp;the&nbsp;ActionDispatcher</span><span style="color: #007700">.</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-7" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;controller&#039; =&gt; &#039;Colectivos&#039;,
		&#039;action&#039; =&gt; &#039;invitar&#039;,
		&#039;pass&#039; =&gt; [],
		&#039;plugin&#039; =&gt; null,
		&#039;_matchedRoute&#039; =&gt; &#039;/:controller/:action/*&#039;,
		&#039;_ext&#039; =&gt; null,
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;
	]
	[protected] data =&gt; [
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; [
		&#039;ajax&#039; =&gt; true,
		&#039;get&#039; =&gt; false,
		&#039;head&#039; =&gt; false,
		&#039;options&#039; =&gt; false
	]
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}</pre>
        </div>
    </div>
    <div id="stack-frame-8" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Runner.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-8">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="61"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$next&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">middleware</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="62"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$next</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="63"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">++;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="64"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="65"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="66"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="67"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="68"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;End&nbsp;of&nbsp;the&nbsp;queue</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="69"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-8" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;controller&#039; =&gt; &#039;Colectivos&#039;,
		&#039;action&#039; =&gt; &#039;invitar&#039;,
		&#039;pass&#039; =&gt; [],
		&#039;plugin&#039; =&gt; null,
		&#039;_matchedRoute&#039; =&gt; &#039;/:controller/:action/*&#039;,
		&#039;_ext&#039; =&gt; null,
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;
	]
	[protected] data =&gt; [
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; [
		&#039;ajax&#039; =&gt; true,
		&#039;get&#039; =&gt; false,
		&#039;head&#039; =&gt; false,
		&#039;options&#039; =&gt; false
	]
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}
object(Cake\Http\Runner) {
	[protected] index =&gt; (int) 5
	[protected] middleware =&gt; object(Cake\Http\MiddlewareQueue) {
		[protected] queue =&gt; [
			[maximum depth reached]
		]
		[protected] callables =&gt; [
			[maximum depth reached]
		]
	}
}</pre>
        </div>
    </div>
    <div id="stack-frame-9" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Runner.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-9">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="61"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$next&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">middleware</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="62"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$next</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="63"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">++;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="64"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="65"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="66"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="67"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="68"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;End&nbsp;of&nbsp;the&nbsp;queue</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="69"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-9" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;controller&#039; =&gt; &#039;Colectivos&#039;,
		&#039;action&#039; =&gt; &#039;invitar&#039;,
		&#039;pass&#039; =&gt; [],
		&#039;plugin&#039; =&gt; null,
		&#039;_matchedRoute&#039; =&gt; &#039;/:controller/:action/*&#039;,
		&#039;_ext&#039; =&gt; null,
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;
	]
	[protected] data =&gt; [
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; [
		&#039;ajax&#039; =&gt; true,
		&#039;get&#039; =&gt; false,
		&#039;head&#039; =&gt; false,
		&#039;options&#039; =&gt; false
	]
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}
object(Cake\Http\Runner) {
	[protected] index =&gt; (int) 2
	[protected] middleware =&gt; object(Cake\Http\MiddlewareQueue) {
		[protected] queue =&gt; [
			[maximum depth reached]
		]
		[protected] callables =&gt; [
			[maximum depth reached]
		]
	}
}</pre>
        </div>
    </div>
    <div id="stack-frame-10" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Middleware\CsrfProtectionMiddleware.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-10">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="119"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="120"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="121"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$request&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_validateAndUnsetTokenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="122"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="123"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="124"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="125"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="126"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="127"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">Set&nbsp;callback&nbsp;</span><span style="color: #007700">for&nbsp;</span><span style="color: #0000BB">allowing&nbsp;to&nbsp;skip&nbsp;token&nbsp;check&nbsp;</span><span style="color: #007700">for&nbsp;</span><span style="color: #0000BB">particular&nbsp;request</span><span style="color: #007700">.</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-10" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;controller&#039; =&gt; &#039;Colectivos&#039;,
		&#039;action&#039; =&gt; &#039;invitar&#039;,
		&#039;pass&#039; =&gt; [],
		&#039;plugin&#039; =&gt; null,
		&#039;_matchedRoute&#039; =&gt; &#039;/:controller/:action/*&#039;,
		&#039;_ext&#039; =&gt; null,
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;
	]
	[protected] data =&gt; [
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; [
		&#039;ajax&#039; =&gt; true,
		&#039;get&#039; =&gt; false,
		&#039;head&#039; =&gt; false,
		&#039;options&#039; =&gt; false
	]
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}</pre>
        </div>
    </div>
    <div id="stack-frame-11" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Runner.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-11">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="61"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$next&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">middleware</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="62"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$next</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="63"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">++;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="64"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="65"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="66"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="67"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="68"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;End&nbsp;of&nbsp;the&nbsp;queue</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="69"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-11" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;controller&#039; =&gt; &#039;Colectivos&#039;,
		&#039;action&#039; =&gt; &#039;invitar&#039;,
		&#039;pass&#039; =&gt; [],
		&#039;plugin&#039; =&gt; null,
		&#039;_matchedRoute&#039; =&gt; &#039;/:controller/:action/*&#039;,
		&#039;_ext&#039; =&gt; null,
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;
	]
	[protected] data =&gt; [
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; [
		&#039;ajax&#039; =&gt; true,
		&#039;get&#039; =&gt; false,
		&#039;head&#039; =&gt; false,
		&#039;options&#039; =&gt; false
	]
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}
object(Cake\Http\Runner) {
	[protected] index =&gt; (int) 2
	[protected] middleware =&gt; object(Cake\Http\MiddlewareQueue) {
		[protected] queue =&gt; [
			[maximum depth reached]
		]
		[protected] callables =&gt; [
			[maximum depth reached]
		]
	}
}</pre>
        </div>
    </div>
    <div id="stack-frame-12" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Runner.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-12">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="47"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="48"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">middleware&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$middleware</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="49"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="50"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="51"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__invoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="52"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="53"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="54"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="55"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;@</span><span style="color: #0000BB">param&nbsp;</span><span style="color: #007700">\</span><span style="color: #0000BB">Psr</span><span style="color: #007700">\</span><span style="color: #0000BB">Http</span><span style="color: #007700">\</span><span style="color: #0000BB">Message</span><span style="color: #007700">\</span><span style="color: #0000BB">ServerRequestInterface&nbsp;$request&nbsp;The&nbsp;server&nbsp;request</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-12" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;controller&#039; =&gt; &#039;Colectivos&#039;,
		&#039;action&#039; =&gt; &#039;invitar&#039;,
		&#039;pass&#039; =&gt; [],
		&#039;plugin&#039; =&gt; null,
		&#039;_matchedRoute&#039; =&gt; &#039;/:controller/:action/*&#039;,
		&#039;_ext&#039; =&gt; null
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}</pre>
        </div>
    </div>
    <div id="stack-frame-13" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Routing\Middleware\RoutingMiddleware.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-13">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="164"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$matching</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="165"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$middleware&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">MiddlewareQueue</span><span style="color: #007700">(</span><span style="color: #0000BB">$matching</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="166"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$runner&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Runner</span><span style="color: #007700">();</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="167"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="168"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$runner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">$middleware</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="169"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="170"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="171"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-13" style="display: none;">
            <pre>object(Cake\Http\MiddlewareQueue) {
	[protected] queue =&gt; [
		(int) 0 =&gt; object(Cake\Http\Middleware\CsrfProtectionMiddleware) {},
		(int) 1 =&gt; object(Cake\Http\Runner) {}
	]
	[protected] callables =&gt; [
		(int) 0 =&gt; object(Cake\Http\Middleware\CsrfProtectionMiddleware) {},
		(int) 1 =&gt; object(Cake\Http\Runner) {}
	]
}
object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;controller&#039; =&gt; &#039;Colectivos&#039;,
		&#039;action&#039; =&gt; &#039;invitar&#039;,
		&#039;pass&#039; =&gt; [],
		&#039;plugin&#039; =&gt; null,
		&#039;_matchedRoute&#039; =&gt; &#039;/:controller/:action/*&#039;,
		&#039;_ext&#039; =&gt; null
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}</pre>
        </div>
    </div>
    <div id="stack-frame-14" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Runner.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-14">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="61"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$next&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">middleware</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="62"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$next</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="63"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">++;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="64"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="65"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="66"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="67"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="68"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;End&nbsp;of&nbsp;the&nbsp;queue</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="69"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-14" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;controller&#039; =&gt; &#039;Colectivos&#039;,
		&#039;action&#039; =&gt; &#039;invitar&#039;,
		&#039;pass&#039; =&gt; [],
		&#039;plugin&#039; =&gt; null,
		&#039;_matchedRoute&#039; =&gt; &#039;/:controller/:action/*&#039;,
		&#039;_ext&#039; =&gt; null
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}
object(Cake\Http\Runner) {
	[protected] index =&gt; (int) 5
	[protected] middleware =&gt; object(Cake\Http\MiddlewareQueue) {
		[protected] queue =&gt; [
			[maximum depth reached]
		]
		[protected] callables =&gt; [
			[maximum depth reached]
		]
	}
}</pre>
        </div>
    </div>
    <div id="stack-frame-15" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Routing\Middleware\AssetMiddleware.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-15">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="84"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__invoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">)</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="85"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="86"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUri</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getPath</span><span style="color: #007700">();</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="87"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'..'</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'.'</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="88"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="89"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="90"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="91"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/.'</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="92"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-15" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;plugin&#039; =&gt; null,
		&#039;controller&#039; =&gt; null,
		&#039;action&#039; =&gt; null,
		&#039;_ext&#039; =&gt; null,
		&#039;pass&#039; =&gt; []
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}</pre>
        </div>
    </div>
    <div id="stack-frame-16" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Runner.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-16">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="61"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$next&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">middleware</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="62"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$next</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="63"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">++;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="64"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="65"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="66"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="67"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="68"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;End&nbsp;of&nbsp;the&nbsp;queue</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="69"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-16" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;plugin&#039; =&gt; null,
		&#039;controller&#039; =&gt; null,
		&#039;action&#039; =&gt; null,
		&#039;_ext&#039; =&gt; null,
		&#039;pass&#039; =&gt; []
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}
object(Cake\Http\Runner) {
	[protected] index =&gt; (int) 5
	[protected] middleware =&gt; object(Cake\Http\MiddlewareQueue) {
		[protected] queue =&gt; [
			[maximum depth reached]
		]
		[protected] callables =&gt; [
			[maximum depth reached]
		]
	}
}</pre>
        </div>
    </div>
    <div id="stack-frame-17" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Error\Middleware\ErrorHandlerMiddleware.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-17">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="92"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*/</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="93"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__invoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">)</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="94"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="95"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">try&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="96"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="97"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}&nbsp;catch&nbsp;(</span><span style="color: #0000BB">Throwable&nbsp;$exception</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="98"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handleException</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="99"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}&nbsp;catch&nbsp;(</span><span style="color: #0000BB">Exception&nbsp;$exception</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="100"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handleException</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-17" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;plugin&#039; =&gt; null,
		&#039;controller&#039; =&gt; null,
		&#039;action&#039; =&gt; null,
		&#039;_ext&#039; =&gt; null,
		&#039;pass&#039; =&gt; []
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}</pre>
        </div>
    </div>
    <div id="stack-frame-18" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Runner.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-18">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="61"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$next&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">middleware</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="62"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$next</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="63"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">++;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="64"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="65"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="66"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="67"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="68"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;End&nbsp;of&nbsp;the&nbsp;queue</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="69"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-18" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;plugin&#039; =&gt; null,
		&#039;controller&#039; =&gt; null,
		&#039;action&#039; =&gt; null,
		&#039;_ext&#039; =&gt; null,
		&#039;pass&#039; =&gt; []
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}
object(Cake\Http\Runner) {
	[protected] index =&gt; (int) 5
	[protected] middleware =&gt; object(Cake\Http\MiddlewareQueue) {
		[protected] queue =&gt; [
			[maximum depth reached]
		]
		[protected] callables =&gt; [
			[maximum depth reached]
		]
	}
}</pre>
        </div>
    </div>
    <div id="stack-frame-19" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\debug_kit\src\Middleware\DebugKitMiddleware.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-19">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="49"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__invoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">)</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="50"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="51"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">service</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadPanels</span><span style="color: #007700">();</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="52"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">service</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">initializePanels</span><span style="color: #007700">();</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="53"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="54"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$row&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">service</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveData</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="55"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$row</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="56"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="57"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-19" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;plugin&#039; =&gt; null,
		&#039;controller&#039; =&gt; null,
		&#039;action&#039; =&gt; null,
		&#039;_ext&#039; =&gt; null,
		&#039;pass&#039; =&gt; []
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}</pre>
        </div>
    </div>
    <div id="stack-frame-20" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Runner.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-20">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="61"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$next&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">middleware</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="62"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$next</span><span style="color: #007700">)&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="63"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index</span><span style="color: #007700">++;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="64"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="65"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$next</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="66"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="67"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="68"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;End&nbsp;of&nbsp;the&nbsp;queue</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="69"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-20" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;plugin&#039; =&gt; null,
		&#039;controller&#039; =&gt; null,
		&#039;action&#039; =&gt; null,
		&#039;_ext&#039; =&gt; null,
		&#039;pass&#039; =&gt; []
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}
object(Cake\Http\Runner) {
	[protected] index =&gt; (int) 5
	[protected] middleware =&gt; object(Cake\Http\MiddlewareQueue) {
		[protected] queue =&gt; [
			[maximum depth reached]
		]
		[protected] callables =&gt; [
			[maximum depth reached]
		]
	}
}</pre>
        </div>
    </div>
    <div id="stack-frame-21" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Runner.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-21">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="47"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="48"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">middleware&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$middleware</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="49"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">index&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="50"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="51"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__invoke</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="52"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="53"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="54"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="55"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;@</span><span style="color: #0000BB">param&nbsp;</span><span style="color: #007700">\</span><span style="color: #0000BB">Psr</span><span style="color: #007700">\</span><span style="color: #0000BB">Http</span><span style="color: #007700">\</span><span style="color: #0000BB">Message</span><span style="color: #007700">\</span><span style="color: #0000BB">ServerRequestInterface&nbsp;$request&nbsp;The&nbsp;server&nbsp;request</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-21" style="display: none;">
            <pre>object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;plugin&#039; =&gt; null,
		&#039;controller&#039; =&gt; null,
		&#039;action&#039; =&gt; null,
		&#039;_ext&#039; =&gt; null,
		&#039;pass&#039; =&gt; []
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}</pre>
        </div>
    </div>
    <div id="stack-frame-22" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\vendor\cakephp\cakephp\src\Http\Server.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-22">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="93"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="94"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dispatchEvent</span><span style="color: #007700">(</span><span style="color: #DD0000">'Server.buildMiddleware'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'middleware'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$middleware</span><span style="color: #007700">]);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="95"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$middleware</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">app</span><span style="color: #007700">);</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="96"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="97"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">runner</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">$middleware</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">);</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="98"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="99"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!(</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">ResponseInterface</span><span style="color: #007700">))&nbsp;{</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="100"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">throw&nbsp;new&nbsp;</span><span style="color: #0000BB">RuntimeException</span><span style="color: #007700">(</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="101"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Application&nbsp;did&nbsp;not&nbsp;create&nbsp;a&nbsp;response.&nbsp;Got&nbsp;"%s"&nbsp;instead.'</span><span style="color: #007700">,</span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-22" style="display: none;">
            <pre>object(Cake\Http\MiddlewareQueue) {
	[protected] queue =&gt; [
		(int) 0 =&gt; object(DebugKit\Middleware\DebugKitMiddleware) {},
		(int) 1 =&gt; object(Cake\Error\Middleware\ErrorHandlerMiddleware) {},
		(int) 2 =&gt; object(Cake\Routing\Middleware\AssetMiddleware) {},
		(int) 3 =&gt; object(Cake\Routing\Middleware\RoutingMiddleware) {},
		(int) 4 =&gt; object(App\Application) {}
	]
	[protected] callables =&gt; [
		(int) 0 =&gt; object(DebugKit\Middleware\DebugKitMiddleware) {},
		(int) 1 =&gt; object(Cake\Error\Middleware\ErrorHandlerMiddleware) {},
		(int) 2 =&gt; object(Cake\Routing\Middleware\AssetMiddleware) {},
		(int) 3 =&gt; object(Cake\Routing\Middleware\RoutingMiddleware) {},
		(int) 4 =&gt; object(App\Application) {}
	]
}
object(Cake\Http\ServerRequest) {
	trustProxy =&gt; false
	[protected] params =&gt; [
		&#039;plugin&#039; =&gt; null,
		&#039;controller&#039; =&gt; null,
		&#039;action&#039; =&gt; null,
		&#039;_ext&#039; =&gt; null,
		&#039;pass&#039; =&gt; []
	]
	[protected] data =&gt; [
		&#039;_csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;colectivo_id&#039; =&gt; &#039;131&#039;,
		&#039;correo&#039; =&gt; &#039;unrealstudiotv@gmail.com&#039;
	]
	[protected] query =&gt; []
	[protected] cookies =&gt; [
		&#039;csrfToken&#039; =&gt; &#039;0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce&#039;,
		&#039;CAKEPHP&#039; =&gt; &#039;2cv160g2n6juf6m0vg9hlogd53&#039;
	]
	[protected] _environment =&gt; [
		&#039;REDIRECT_REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;REDIRECT_MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;REDIRECT_MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;REDIRECT_OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;REDIRECT_PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;REDIRECT_TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;REDIRECT_STATUS&#039; =&gt; &#039;200&#039;,
		&#039;MIBDIRS&#039; =&gt; &#039;C:/xampp/php/extras/mibs&#039;,
		&#039;MYSQL_HOME&#039; =&gt; &#039;\xampp\mysql\bin&#039;,
		&#039;OPENSSL_CONF&#039; =&gt; &#039;C:/xampp/apache/bin/openssl.cnf&#039;,
		&#039;PHP_PEAR_SYSCONF_DIR&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;PHPRC&#039; =&gt; &#039;\xampp\php&#039;,
		&#039;TMP&#039; =&gt; &#039;\xampp\tmp&#039;,
		&#039;HTTP_HOST&#039; =&gt; &#039;localhost&#039;,
		&#039;HTTP_USER_AGENT&#039; =&gt; &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0&#039;,
		&#039;HTTP_ACCEPT&#039; =&gt; &#039;*/*&#039;,
		&#039;HTTP_ACCEPT_LANGUAGE&#039; =&gt; &#039;es-ES,es;q=0.8,en-US;q=0.5,en;q=0.3&#039;,
		&#039;HTTP_ACCEPT_ENCODING&#039; =&gt; &#039;gzip, deflate&#039;,
		&#039;CONTENT_TYPE&#039; =&gt; &#039;application/x-www-form-urlencoded; charset=UTF-8&#039;,
		&#039;HTTP_X_REQUESTED_WITH&#039; =&gt; &#039;XMLHttpRequest&#039;,
		&#039;CONTENT_LENGTH&#039; =&gt; &#039;203&#039;,
		&#039;HTTP_ORIGIN&#039; =&gt; &#039;http://localhost&#039;,
		&#039;HTTP_DNT&#039; =&gt; &#039;1&#039;,
		&#039;HTTP_CONNECTION&#039; =&gt; &#039;keep-alive&#039;,
		&#039;HTTP_REFERER&#039; =&gt; &#039;http://localhost/ciudadaniaconsentido/usuarios/perfil&#039;,
		&#039;HTTP_COOKIE&#039; =&gt; &#039;csrfToken=0f254e4c574548787c29ba9bf1fb9ab09c8f7dc38c4d7ceffa06c485cd5f200872b5405b1a045c981cb540b0c2ae2cbc5f4270f6fff990d4577b82dfdb45efce; CAKEPHP=2cv160g2n6juf6m0vg9hlogd53&#039;,
		&#039;PATH&#039; =&gt; &#039;C:\Program Files (x86)\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;C:\Program Files\dotnet\;C:\Program Files\Microsoft SQL Server\130\Tools\Binn\;C:\Program Files\SafeNet\Authentication\SAC\x32;C:\Program Files\SafeNet\Authentication\SAC\x64;C:\Program Files\NVIDIA Corporation\NVIDIA NvDLISR;C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;%SYSTEMROOT%\System32\OpenSSH\;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\GitHubDesktop\bin;C:\Users\Admin\AppData\Local\Microsoft\WindowsApps;C:\Users\Admin\AppData\Local\atom\bin&#039;,
		&#039;SystemRoot&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;COMSPEC&#039; =&gt; &#039;C:\WINDOWS\system32\cmd.exe&#039;,
		&#039;PATHEXT&#039; =&gt; &#039;.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC&#039;,
		&#039;WINDIR&#039; =&gt; &#039;C:\WINDOWS&#039;,
		&#039;SERVER_SIGNATURE&#039; =&gt; &#039;&lt;address&gt;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4 Server at localhost Port 80&lt;/address&gt;
&#039;,
		&#039;SERVER_SOFTWARE&#039; =&gt; &#039;Apache/2.4.39 (Win64) OpenSSL/1.1.1b PHP/7.3.4&#039;,
		&#039;SERVER_NAME&#039; =&gt; &#039;localhost&#039;,
		&#039;SERVER_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;SERVER_PORT&#039; =&gt; &#039;80&#039;,
		&#039;REMOTE_ADDR&#039; =&gt; &#039;::1&#039;,
		&#039;DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;REQUEST_SCHEME&#039; =&gt; &#039;http&#039;,
		&#039;CONTEXT_PREFIX&#039; =&gt; &#039;&#039;,
		&#039;CONTEXT_DOCUMENT_ROOT&#039; =&gt; &#039;C:/xampp/htdocs&#039;,
		&#039;SERVER_ADMIN&#039; =&gt; &#039;postmaster@localhost&#039;,
		&#039;SCRIPT_FILENAME&#039; =&gt; &#039;C:/xampp/htdocs/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REMOTE_PORT&#039; =&gt; &#039;62986&#039;,
		&#039;REDIRECT_URL&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/colectivos/invitar&#039;,
		&#039;GATEWAY_INTERFACE&#039; =&gt; &#039;CGI/1.1&#039;,
		&#039;SERVER_PROTOCOL&#039; =&gt; &#039;HTTP/1.1&#039;,
		&#039;REQUEST_METHOD&#039; =&gt; &#039;POST&#039;,
		&#039;QUERY_STRING&#039; =&gt; &#039;&#039;,
		&#039;REQUEST_URI&#039; =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;,
		&#039;SCRIPT_NAME&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;PHP_SELF&#039; =&gt; &#039;/ciudadaniaconsentido/webroot/index.php&#039;,
		&#039;REQUEST_TIME_FLOAT&#039; =&gt; (float) 1569903370.563,
		&#039;REQUEST_TIME&#039; =&gt; (int) 1569903370,
		&#039;ORIGINAL_REQUEST_METHOD&#039; =&gt; &#039;POST&#039;
	]
	[protected] url =&gt; &#039;colectivos/invitar&#039;
	[protected] base =&gt; &#039;/ciudadaniaconsentido&#039;
	[protected] webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
	[protected] here =&gt; &#039;/ciudadaniaconsentido/colectivos/invitar&#039;
	[protected] trustedProxies =&gt; []
	[protected] _input =&gt; null
	[protected] _detectors =&gt; [
		&#039;get&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;GET&#039;
		],
		&#039;post&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;POST&#039;
		],
		&#039;put&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PUT&#039;
		],
		&#039;patch&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;PATCH&#039;
		],
		&#039;delete&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;DELETE&#039;
		],
		&#039;head&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;HEAD&#039;
		],
		&#039;options&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;REQUEST_METHOD&#039;,
			&#039;value&#039; =&gt; &#039;OPTIONS&#039;
		],
		&#039;ssl&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTPS&#039;,
			&#039;options&#039; =&gt; [
				[maximum depth reached]
			]
		],
		&#039;ajax&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_X_REQUESTED_WITH&#039;,
			&#039;value&#039; =&gt; &#039;XMLHttpRequest&#039;
		],
		&#039;flash&#039; =&gt; [
			&#039;env&#039; =&gt; &#039;HTTP_USER_AGENT&#039;,
			&#039;pattern&#039; =&gt; &#039;/^(Shockwave|Adobe) Flash/&#039;
		],
		&#039;requested&#039; =&gt; [
			&#039;param&#039; =&gt; &#039;requested&#039;,
			&#039;value&#039; =&gt; (int) 1
		],
		&#039;json&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;json&#039;
		],
		&#039;xml&#039; =&gt; [
			&#039;accept&#039; =&gt; [
				[maximum depth reached]
			],
			&#039;param&#039; =&gt; &#039;_ext&#039;,
			&#039;value&#039; =&gt; &#039;xml&#039;
		],
		&#039;mobile&#039; =&gt; object(Closure) {},
		&#039;tablet&#039; =&gt; object(Closure) {}
	]
	[protected] _detectorCache =&gt; []
	[protected] stream =&gt; object(Zend\Diactoros\PhpInputStream) {
		[protected] resource =&gt; resource
		[protected] stream =&gt; &#039;php://input&#039;
		[private] cache =&gt; &#039;&#039;
		[private] reachedEof =&gt; false
	}
	[protected] uri =&gt; object(Zend\Diactoros\Uri) {
		base =&gt; &#039;/ciudadaniaconsentido&#039;
		webroot =&gt; &#039;/ciudadaniaconsentido/&#039;
		[protected] allowedSchemes =&gt; [
			[maximum depth reached]
		]
		[private] scheme =&gt; &#039;http&#039;
		[private] userInfo =&gt; &#039;&#039;
		[private] host =&gt; &#039;localhost&#039;
		[private] port =&gt; null
		[private] path =&gt; &#039;/colectivos/invitar&#039;
		[private] query =&gt; &#039;&#039;
		[private] fragment =&gt; &#039;&#039;
		[private] uriString =&gt; null
	}
	[protected] session =&gt; object(Cake\Http\Session) {
		[protected] _engine =&gt; null
		[protected] _started =&gt; true
		[protected] _lifetime =&gt; (int) 1440
		[protected] _isCLI =&gt; false
	}
	[protected] attributes =&gt; []
	[protected] emulatedAttributes =&gt; [
		(int) 0 =&gt; &#039;session&#039;,
		(int) 1 =&gt; &#039;webroot&#039;,
		(int) 2 =&gt; &#039;base&#039;,
		(int) 3 =&gt; &#039;params&#039;,
		(int) 4 =&gt; &#039;here&#039;
	]
	[protected] uploadedFiles =&gt; []
	[protected] protocol =&gt; null
	[protected] requestTarget =&gt; null
	[private] deprecatedProperties =&gt; [
		&#039;data&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getData()&#039;,
			&#039;set&#039; =&gt; &#039;withData()&#039;
		],
		&#039;query&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getQuery()&#039;,
			&#039;set&#039; =&gt; &#039;withQueryParams()&#039;
		],
		&#039;params&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getParam()&#039;,
			&#039;set&#039; =&gt; &#039;withParam()&#039;
		],
		&#039;cookies&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getCookie()&#039;,
			&#039;set&#039; =&gt; &#039;withCookieParams()&#039;
		],
		&#039;url&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getPath()&#039;,
			&#039;set&#039; =&gt; &#039;withRequestTarget()&#039;
		],
		&#039;base&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;base&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;base&quot;)&#039;
		],
		&#039;webroot&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;webroot&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;webroot&quot;)&#039;
		],
		&#039;here&#039; =&gt; [
			&#039;get&#039; =&gt; &#039;getAttribute(&quot;here&quot;)&#039;,
			&#039;set&#039; =&gt; &#039;withAttribute(&quot;here&quot;)&#039;
		]
	]
}
object(Cake\Http\Response) {

	&#039;status&#039; =&gt; (int) 200,
	&#039;contentType&#039; =&gt; &#039;text/html&#039;,
	&#039;headers&#039; =&gt; [
		&#039;Content-Type&#039; =&gt; [
			(int) 0 =&gt; &#039;text/html; charset=UTF-8&#039;
		]
	],
	&#039;file&#039; =&gt; null,
	&#039;fileRange&#039; =&gt; [],
	&#039;cookies&#039; =&gt; object(Cake\Http\Cookie\CookieCollection) {
		[protected] cookies =&gt; [[maximum depth reached]]
	},
	&#039;cacheDirectives&#039; =&gt; [],
	&#039;body&#039; =&gt; &#039;&#039;

}</pre>
        </div>
    </div>
    <div id="stack-frame-23" style="display:none;" class="stack-details">
        <span class="stack-frame-file">C:\xampp\htdocs\ciudadaniaconsentido\webroot\index.php</span>
        <a href="#" class="toggle-link stack-frame-args" data-target="stack-args-23">toggle arguments</a>

        <table class="code-excerpt" cellspacing="0" cellpadding="0">
                            <tr>
                <td class="excerpt-number" data-number="36"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span><span style="color: #FF8000">//&nbsp;Bind&nbsp;your&nbsp;application&nbsp;to&nbsp;the&nbsp;server.</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="37"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB">$server&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Server</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">Application</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__DIR__</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'/config'</span><span style="color: #007700">));</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="38"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="39"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span><span style="color: #FF8000">//&nbsp;Run&nbsp;the&nbsp;request/response&nbsp;through&nbsp;the&nbsp;application&nbsp;and&nbsp;emit&nbsp;the&nbsp;response.</span></span></code></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="40"></td>
                <td class="excerpt-line"><span class="code-highlight"><code><span style="color: #000000"><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">emit</span><span style="color: #007700">(</span><span style="color: #0000BB">$server</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">());</span></span></code></span></td>
            </tr>
                    <tr>
                <td class="excerpt-number" data-number="41"></td>
                <td class="excerpt-line"><code><span style="color: #000000"><span style="color: #0000BB"></span></span></code></td>
            </tr>
                </table>

        <div id="stack-args-23" style="display: none;">
            <pre>No arguments</pre>
        </div>
    </div>

        <div class="error-suggestion">
            <h3>Could this be caused by using Auto-Tables?</h3>
<p>
Some of the Table objects in your application were created by instantiating "<strong>Cake\ORM\Table</strong>"
instead of any other specific subclass.
</p>
<p>This could be the cause for this exception. Auto-Tables are created for you under the following circumstances:</p>
<ul>
    <li>The class for the specified table does not exist.</li>
    <li>The Table was created with a typo: <strong><em>$this->getTableLocator()->get('Atricles');</em></strong></li>
    <li>The class file has a typo in the name or incorrect namespace: <strong><em>class Atricles extends Table</em></strong></li>
    <li>The file containing the class has a typo or incorrect casing: <strong><em>Atricles.php</em></strong></li>
    <li>The Table was used using associations but the association has a typo: <strong><em>$this->belongsTo('Atricles')</em></strong></li>
    <li>The table class resides in a Plugin but <strong><em>no plugin notation</em></strong> was used in the association definition.</li>
</ul>
<br/>
<p>Please try correcting the issue for the following table aliases:</p>
<ul>
    <li><strong>ColectivosUsuarios</strong></li>
</ul>
<br/>
        </div>

                <p class="customize">
            If you want to customize this error message, create
            <em>src\Template\Error\error500.ctp</em>
        </p>
            </div>

    <div class="error-nav">
        <a href="#" class="toggle-link toggle-vendor-frames">toggle vendor stack frames</a>

<ul class="stack-trace">
        <li class="stack-frame app-frame">
            <a href="#" data-target="stack-frame-0">
                            <span class="stack-function">&rang; Cake\View\View-&gt;element</span>
                        <span class="stack-file">
                            APP/Template\Colectivos\invitar.ctp, line 3                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-1">
                            <span class="stack-function">&rang; include</span>
                        <span class="stack-file">
                            CORE\src\View\View.php, line 1418                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-2">
                            <span class="stack-function">&rang; Cake\View\View-&gt;_evaluate</span>
                        <span class="stack-file">
                            CORE\src\View\View.php, line 1379                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-3">
                            <span class="stack-function">&rang; Cake\View\View-&gt;_render</span>
                        <span class="stack-file">
                            CORE\src\View\View.php, line 879                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-4">
                            <span class="stack-function">&rang; Cake\View\View-&gt;render</span>
                        <span class="stack-file">
                            CORE\src\Controller\Controller.php, line 795                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-5">
                            <span class="stack-function">&rang; Cake\Controller\Controller-&gt;render</span>
                        <span class="stack-file">
                            CORE\src\Http\ActionDispatcher.php, line 126                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-6">
                            <span class="stack-function">&rang; Cake\Http\ActionDispatcher-&gt;_invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\ActionDispatcher.php, line 94                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-7">
                            <span class="stack-function">&rang; Cake\Http\ActionDispatcher-&gt;dispatch</span>
                        <span class="stack-file">
                            CORE\src\Http\BaseApplication.php, line 234                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-8">
                            <span class="stack-function">&rang; Cake\Http\BaseApplication-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\Runner.php, line 65                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-9">
                            <span class="stack-function">&rang; Cake\Http\Runner-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\Runner.php, line 65                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-10">
                            <span class="stack-function">&rang; Cake\Http\Runner-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\Middleware\CsrfProtectionMiddleware.php, line 123                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-11">
                            <span class="stack-function">&rang; Cake\Http\Middleware\CsrfProtectionMiddleware-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\Runner.php, line 65                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-12">
                            <span class="stack-function">&rang; Cake\Http\Runner-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\Runner.php, line 51                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-13">
                            <span class="stack-function">&rang; Cake\Http\Runner-&gt;run</span>
                        <span class="stack-file">
                            CORE\src\Routing\Middleware\RoutingMiddleware.php, line 168                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-14">
                            <span class="stack-function">&rang; Cake\Routing\Middleware\RoutingMiddleware-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\Runner.php, line 65                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-15">
                            <span class="stack-function">&rang; Cake\Http\Runner-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Routing\Middleware\AssetMiddleware.php, line 88                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-16">
                            <span class="stack-function">&rang; Cake\Routing\Middleware\AssetMiddleware-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\Runner.php, line 65                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-17">
                            <span class="stack-function">&rang; Cake\Http\Runner-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Error\Middleware\ErrorHandlerMiddleware.php, line 96                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-18">
                            <span class="stack-function">&rang; Cake\Error\Middleware\ErrorHandlerMiddleware-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\Runner.php, line 65                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-19">
                            <span class="stack-function">&rang; Cake\Http\Runner-&gt;__invoke</span>
                        <span class="stack-file">
                            ROOT\vendor\cakephp\debug_kit\src\Middleware\DebugKitMiddleware.php, line 53                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-20">
                            <span class="stack-function">&rang; DebugKit\Middleware\DebugKitMiddleware-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\Runner.php, line 65                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-21">
                            <span class="stack-function">&rang; Cake\Http\Runner-&gt;__invoke</span>
                        <span class="stack-file">
                            CORE\src\Http\Runner.php, line 51                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-22">
                            <span class="stack-function">&rang; Cake\Http\Runner-&gt;run</span>
                        <span class="stack-file">
                            CORE\src\Http\Server.php, line 97                        </span>
        </a>
        </li>
        <li class="stack-frame vendor-frame">
            <a href="#" data-target="stack-frame-23">
                            <span class="stack-function">&rang; Cake\Http\Server-&gt;run</span>
                        <span class="stack-file">
                            ROOT\webroot\index.php, line 40                        </span>
        </a>
        </li>
</ul>
    </div>

<script type="text/javascript">
function bindEvent(selector, eventName, listener) {
    var els = document.querySelectorAll(selector);
    for (var i = 0, len = els.length; i < len; i++) {
        els[i].addEventListener(eventName, listener, false);
    }
}

function toggleElement(el) {
    if (el.style.display === 'none') {
        el.style.display = 'block';
    } else {
        el.style.display = 'none';
    }
}

function each(els, cb) {
    var i, len;
    for (i = 0, len = els.length; i < len; i++) {
        cb(els[i], i);
    }
}

window.addEventListener('load', function() {
    bindEvent('.stack-frame-args', 'click', function(event) {
        var target = this.dataset['target'];
        var el = document.getElementById(target);
        toggleElement(el);
        event.preventDefault();
    });

    var details = document.querySelectorAll('.stack-details');
    var frames = document.querySelectorAll('.stack-frame');
    bindEvent('.stack-frame a', 'click', function(event) {
        each(frames, function(el) {
            el.classList.remove('active');
        });
        this.parentNode.classList.add('active');

        each(details, function(el) {
            el.style.display = 'none';
        });

        var target = document.getElementById(this.dataset['target']);
        toggleElement(target);
        event.preventDefault();
    });

    bindEvent('.toggle-vendor-frames', 'click', function(event) {
        each(frames, function(el) {
            if (el.classList.contains('vendor-frame')) {
                toggleElement(el);
            }
        });
        event.preventDefault();
    });
});
</script>
<script id="__debug_kit" data-id="5fc0caad-4f9f-4d48-bf42-31b0d286187c" data-url="http://localhost/ciudadaniaconsentido/" src="/ciudadaniaconsentido/debug_kit/js/toolbar.js?1569730374"></script></body>
</html>
perfil line 2 > scriptElement:16:11
