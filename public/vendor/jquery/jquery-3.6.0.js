/ *!
 * Biblioteca jQuery JavaScript v3.6.0
 * https://jquery.com/
 *
 * Incluye Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright OpenJS Foundation y otros colaboradores
 * Publicado bajo la licencia MIT
 * https://jquery.org/license
 *
 * Fecha: 2021-03-02T17: 08Z
 * /
(funci�n (global, f�brica) {

	"uso estricto";

	if (typeof module === "object" && typeof module.exports === "object") {

		// Para entornos CommonJS y CommonJS-like donde una `ventana` adecuada
		// est� presente, ejecuta la f�brica y obt�n jQuery.
		// Para entornos que no tienen una `ventana` con un` documento`
		// (como Node.js), exponer una f�brica como module.exports.
		// Esto acent�a la necesidad de crear una `ventana` real.
		// por ejemplo, var jQuery = require ("jquery") (ventana);
		// Ver boleto # 14549 para m�s informaci�n.
		module.exports = global.document?
			f�brica (global, verdadero):
			funci�n (w) {
				if (! w.document) {
					lanzar un nuevo error ("jQuery requiere una ventana con un documento");
				}
				retorno de f�brica (w);
			};
	} dem�s {
		f�brica (global);
	}

// Pasa esto si la ventana a�n no est� definida
}) (typeof window! == "undefined"? window: this, function (window, noGlobal) {

// Edge <= 12 - 13+, Firefox <= 18 - 45+, IE 10 - 11, Safari 5.1 - 9+, iOS 6 - 9.1
// lanzar excepciones cuando un c�digo no estricto (por ejemplo, ASP.NET 4.5) accede al modo estricto
// argumentos.callee.caller (trac-13335). Pero a partir de jQuery 3.0 (2016), el modo estricto deber�a ser com�n
// suficiente para que todos estos intentos est�n protegidos en un bloque try.
"uso estricto";

var arr = [];

var getProto = Object.getPrototypeOf;

var rebanada = arr.slice;

var flat = arr.flat? funci�n (matriz) {
	return arr.flat.call (matriz);
}: funci�n (matriz) {
	return arr.concat.apply ([], matriz);
};


var push = arr.push;

var indexOf = arr.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var fnToString = hasOwn.toString;

var ObjectFunctionString = fnToString.call (Objeto);

var support = {};

var isFunction = function isFunction (obj) {

		// Soporte: Chrome <= 57, Firefox <= 52
		// En algunos navegadores, typeof devuelve "funci�n" para elementos HTML <object>
		// (es decir, `typeof document.createElement (" objeto ") ===" funci�n "`).
		// No queremos clasificar * ning�n * nodo DOM como una funci�n.
		// Soporte: QtWeb <= 3.8.5, WebKit <= 534.34, herramienta wkhtmltopdf <= 0.12.5
		// Plus para WebKit antiguo, typeof devuelve "funci�n" para colecciones HTML
		// (por ejemplo, `typeof document.getElementsByTagName (" div ") ===" function "`). (gh-4756)
		return typeof obj === "function" && typeof obj.nodeType! == "number" &&
			typeof obj.item! == "funci�n";
	};


var isWindow = function isWindow (obj) {
		return obj! = null && obj === obj.window;
	};


var document = window.document;



	var preserveScriptAttributes = {
		tipo: verdadero,
		src: cierto,
		nonce: cierto,
		noModule: verdadero
	};

	funci�n DOMEval (c�digo, nodo, documento) {
		doc = doc || documento;

		var i, val,
			script = doc.createElement ("script");

		script.text = c�digo;
		si (nodo) {
			para (i en protectedScriptAttributes) {

				// Soporte: Firefox 64+, Edge 18+
				// Algunos navegadores no admiten la propiedad "nonce" en los scripts.
				// Por otro lado, usar `getAttribute` no es suficiente ya que
				// el atributo `nonce` se restablece a una cadena vac�a siempre que
				// se conecta al contexto de navegaci�n.
				// Ver https://github.com/whatwg/html/issues/2369
				// Ver https://html.spec.whatwg.org/#nonce-attributes
				// La comprobaci�n `node.getAttribute` se agreg� por el bien de
				// `jQuery.globalEval` para que pueda falsificar un nodo que contenga nonce
				// a trav�s de un objeto.
				val = nodo [i] || node.getAttribute && node.getAttribute (i);
				if (val) {
					script.setAttribute (i, val);
				}
			}
		}
		doc.head.appendChild (secuencia de comandos) .parentNode.removeChild (secuencia de comandos);
	}


funci�n toType (obj) {
	if (obj == null) {
		return obj + "";
	}

	// Soporte: Android <= 2.3 solamente (RegExp funcional)
	tipo de retorno de obj === "objeto" || typeof obj === "funci�n"?
		class2type [toString.call (obj)] || "objeto":
		typeof obj;
}
/ * S�mbolo global * /
// Definir este global en .eslintrc.json crear�a el peligro de usar el global
// sin vigilancia en otro lugar, parece m�s seguro definir global solo para este m�dulo



var
	versi�n = "3.6.0",

	// Definir una copia local de jQuery
	jQuery = funci�n (selector, contexto) {

		// El objeto jQuery es en realidad solo el constructor init 'mejorado'
		// Necesita init si se llama a jQuery (solo permita que se lance un error si no est� incluido)
		devolver nuevo jQuery.fn.init (selector, contexto);
	};

jQuery.fn = jQuery.prototype = {

	// La versi�n actual de jQuery que se est� utilizando
	jquery: versi�n,

	constructor: jQuery,

	// La longitud predeterminada de un objeto jQuery es 0
	longitud: 0,

	toArray: function () {
		return slice.call (esto);
	},

	// Obtener el en�simo elemento del conjunto de elementos coincidentes O
	// Obtiene todo el conjunto de elementos coincidentes como una matriz limpia
	obtener: function (num) {

		// Devuelve todos los elementos en una matriz limpia
		if (num == null) {
			return slice.call (esto);
		}

		// Devuelve solo un elemento del conjunto
		devolver num <0? este [num + this.length]: este [num];
	},

	// Toma una matriz de elementos y emp�jala hacia la pila
	// (devolviendo el nuevo conjunto de elementos coincidentes)
	pushStack: function (elems) {

		// Construye un nuevo conjunto de elementos coincidentes de jQuery
		var ret = jQuery.merge (este.constructor (), elems);

		// Agrega el objeto antiguo a la pila (como referencia)
		ret.prevObject = esto;

		// Devuelve el conjunto de elementos reci�n formado
		return ret;
	},

	// Ejecuta una devoluci�n de llamada para cada elemento del conjunto coincidente.
	cada uno: funci�n (devoluci�n de llamada) {
		return jQuery.each (esto, devoluci�n de llamada);
	},

	mapa: funci�n (devoluci�n de llamada) {
		return this.pushStack (jQuery.map (this, function (elem, i) {
			return callback.call (elem, i, elem);
		}));
	},

	rebanada: funci�n () {
		return this.pushStack (slice.apply (esto, argumentos));
	},

	primero: funci�n () {
		devuelve this.eq (0);
	},

	�ltimo: function () {
		devuelve this.eq (-1);
	},

	par: funci�n () {
		return this.pushStack (jQuery.grep (this, function (_elem, i) {
			return (i + 1)% 2;
		}));
	},

	Funci�n impar() {
		return this.pushStack (jQuery.grep (this, function (_elem, i) {
			return i% 2;
		}));
	},

	eq: funci�n (i) {
		var len = this.length,
			j = + i + (i <0? len: 0);
		return this.pushStack (j> = 0 && j <len? [this [j]]: []);
	},

	end: function () {
		devuelve this.prevObject || this.constructor ();
	},

	// S�lo para uso interno.
	// Se comporta como un m�todo de Array, no como un m�todo de jQuery.
	empuja empuja,
	sort: arr.sort,
	empalme: arr.splice
};

jQuery.extend = jQuery.fn.extend = function () {
	var opciones, nombre, src, copy, copyIsArray, clone,
		objetivo = argumentos [0] || {},
		i = 1,
		longitud = argumentos.longitud,
		profundo = falso;

	// Manejar una situaci�n de copia profunda
	if (typeof target === "boolean") {
		profundo = objetivo;

		// Omite el booleano y el objetivo
		objetivo = argumentos [i] || {};
		i ++;
	}

	// Manejar el caso cuando el objetivo es una cadena o algo (posible en una copia profunda)
	if (typeof target! == "object" &&! isFunction (target)) {
		objetivo = {};
	}

	// Extiende jQuery en s� mismo si solo se pasa un argumento
	si (i === longitud) {
		objetivo = esto;
		I--;
	}

	para (; i <longitud; i ++) {

		// Tratar solo con valores no nulos / indefinidos
		if ((opciones = argumentos [i])! = nulo) {

			// Extiende el objeto base
			para (nombre en opciones) {
				copiar = opciones [nombre];

				// Prevenir la contaminaci�n de Object.prototype
				// Evita un bucle sin fin
				if (nombre === "__proto__" || destino === copiar) {
					Seguir;
				}

				// Recurrir si estamos fusionando objetos simples o matrices
				if (deep && copy && (jQuery.isPlainObject (copy) ||
					(copyIsArray = Array.isArray (copia)))) {
					src = objetivo [nombre];

					// Aseg�rate del tipo adecuado para el valor fuente
					if (copyIsArray &&! Array.isArray (src)) {
						clon = [];
					} else if (! copyIsArray &&! jQuery.isPlainObject (src)) {
						clon = {};
					} dem�s {
						clon = src;
					}
					copyIsArray = falso;

					// Nunca mueva objetos originales, cl�nelos
					target [nombre] = jQuery.extend (deep, clone, copy);

				// No introduzcas valores indefinidos
				} m�s si (copiar! == indefinido) {
					destino [nombre] = copiar;
				}
			}
		}
	}

	// Devuelve el objeto modificado
	objetivo de retorno;
};

jQuery.extend ({

	// �nico para cada copia de jQuery en la p�gina
	expando: "jQuery" + (version + Math.random ()) .replace (/ \ D / g, ""),

	// Supongamos que jQuery est� listo sin el m�dulo listo
	isReady: cierto,

	error: function (msg) {
		lanzar un nuevo error (msg);
	},

	noop: function () {},

	isPlainObject: function (obj) {
		var proto, Ctor;

		// Detecta negativos obvios
		// Use toString en lugar de jQuery.type para capturar objetos del host
		if (! obj || toString.call (obj)! == "[object Object]") {
			falso retorno;
		}

		proto = getProto (obj);

		// Los objetos sin prototipo (por ejemplo, `Object.create (null)`) son simples
		if (! proto) {
			devuelve verdadero;
		}

		// Los objetos con prototipo son simples si fueron construidos por una funci�n de objeto global
		Ctor = hasOwn.call (proto, "constructor") && proto.constructor;
		return typeof Ctor === "funci�n" && fnToString.call (Ctor) === ObjectFunctionString;
	},

	isEmptyObject: function (obj) {
		var nombre;

		para (nombre en obj) {
			falso retorno;
		}
		devuelve verdadero;
	},

	// Eval�a un script en un contexto proporcionado; recae en el global
	// si no se especifica.
	globalEval: function (c�digo, opciones, doc) {
		DOMEval (c�digo, {nonce: options && options.nonce}, doc);
	},

	cada uno: funci�n (obj, devoluci�n de llamada) {
		var longitud, i = 0;

		if (isArrayLike (obj)) {
			length = obj.length;
			para (; i <longitud; i ++) {
				if (callback.call (obj [i], i, obj [i]) === falso) {
					rotura;
				}
			}
		} dem�s {
			for (i in obj) {
				if (callback.call (obj [i], i, obj [i]) === falso) {
					rotura;
				}
			}
		}

		return obj;
	},

	// los resultados son solo para uso interno
	makeArray: function (arr, results) {
		var ret = resultados || [];

		if (arr! = null) {
			if (isArrayLike (Object (arr))) {
				jQuery.merge (ret,
					typeof arr === "cadena"?
						[arr]: arr
				);
			} dem�s {
				push.call (ret, arr);
			}
		}

		return ret;
	},

	inArray: function (elem, arr, i) {
		return arr == null? -1: indexOf.call (arr, elem, i);
	},

	// Soporte: Android <= 4.0 solamente, solo PhantomJS 1
	// push.apply (_, arraylike) arroja un WebKit antiguo
	fusionar: funci�n (primero, segundo) {
		var len = + second.length,
			j = 0,
			i = primera.longitud;

		para (; j <len; j ++) {
			primero [i ++] = segundo [j];
		}

		primera.longitud = i;

		regresar primero;
	},

	grep: function (elems, callback, invertir) {
		var callbackInverse,
			coincidencias = [],
			i = 0,
			length = elems.length,
			callbackExpect =! invertir;

		// Revisa la matriz, solo guarda los elementos
		// que pasan la funci�n de validador
		para (; i <longitud; i ++) {
			callbackInverse =! callback (elems [i], i);
			if (callbackInverse! == callbackExpect) {
				f�sforos.push (elems [i]);
			}
		}

		devolver coincidencias;
	},

	// arg es solo para uso interno
	map: function (elems, callback, arg) {
		var longitud, valor,
			i = 0,
			ret = [];

		// Repasa la matriz, traduciendo cada uno de los elementos a sus nuevos valores
		if (isArrayLike (elems)) {
			length = elems.length;
			para (; i <longitud; i ++) {
				valor = devoluci�n de llamada (elems [i], i, arg);

				si (valor! = nulo) {
					ret.push (valor);
				}
			}

		// Revisa todas las claves del objeto,
		} dem�s {
			para (yo en elems) {
				valor = devoluci�n de llamada (elems [i], i, arg);

				si (valor! = nulo) {
					ret.push (valor);
				}
			}
		}

		// Aplanar cualquier arreglo anidado
		volver plano (ret);
	},

	// Un contador GUID global para objetos
	guid: 1,

	// jQuery.support no se usa en Core pero otros proyectos adjuntan su
	// propiedades para que exista.
	soporte soporte
});

if (tipo de s�mbolo === "funci�n") {
	jQuery.fn [Symbol.iterator] = arr [Symbol.iterator];
}

// Rellenar el mapa class2type
jQuery.each ("N�mero booleano Cadena Funci�n Array Fecha RegExp Objeto S�mbolo de error" .split (""),
	funci�n (_i, nombre) {
		class2type ["[objeto" + nombre + "]"] = name.toLowerCase ();
	});

function isArrayLike (obj) {

	// Soporte: solo iOS 8.2 real (no reproducible en el simulador)
	// Comprobaci�n `in` utilizada para evitar el error JIT (gh-2145)
	// hasOwn no se usa aqu� debido a falsos negativos
	// con respecto a la longitud de la lista de nodos en IE
	var length = !! obj && "length" en obj && obj.length,
		tipo = toType (obj);

	if (isFunction (obj) || isWindow (obj)) {
		falso retorno;
	}

	tipo de retorno === "matriz" || longitud === 0 ||
		typeof length === "n�mero" && longitud> 0 && (longitud - 1) en obj;
}
var chisporroteo =
/ *!
 * Sizzle CSS Selector Engine v2.3.6
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation y otros colaboradores
 * Publicado bajo la licencia MIT
 * https://js.foundation/
 *
 * Fecha: 2021-02-16
 * /
(funci�n (ventana) {
var i,
	apoyo,
	Expr,
	getText,
	isXML,
	tokenizar
	compilar,
	Seleccione,
	outsidemostContext,
	sortInput,
	hasDuplicate,

	// Variables de documentos locales
	setDocument
	documento,
	docElem,
	documentIsHTML,
	rbuggyQSA,
	rbuggyMatches,
	partidos,
	contiene

	// Datos espec�ficos de la instancia
	expando = "chisporroteo" + 1 * nueva fecha (),
	favoriteDoc = window.document,
	dirruns = 0,
	hecho = 0,
	classCache = createCache (),
	tokenCache = createCache (),
	compilerCache = createCache (),
	nonnativeSelectorCache = createCache (),
	sortOrder = function (a, b) {
		si (a === b) {
			hasDuplicate = true;
		}
		return 0;
	},

	// M�todos de instancia
	hasOwn = ({}) .hasOwnProperty,
	arr = [],
	pop = arr.pop,
	pushNative = arr.push,
	empujar = arr.push,
	rebanada = arr.slice,

	// Usa un indexOf reducido ya que es m�s r�pido que el nativo
	// https://jsperf.com/thor-indexof-vs-for/5
	indexOf = function (lista, elem) {
		var i = 0,
			len = list.length;
		para (; i <len; i ++) {
			si (lista [i] === elem) {
				volver i;
			}
		}
		return -1;
	},

	booleanos = "comprobado | seleccionado | as�ncrono | enfoque autom�tico | reproducci�n autom�tica | controles | aplazar | desactivado | oculto |" +
		"ismap | loop | multiple | open | readonly | required | scoped",

	// Expresiones regulares

	// http://www.w3.org/TR/css3-selectors/#whitespace
	espacio en blanco = "[\\ x20 \\ t \\ r \\ n \\ f]",

	// https://www.w3.org/TR/css-syntax-3/#ident-token-diagram
	identificador = "(?: \\\\ [\\ da-fA-F] {1,6}" + espacio en blanco +
		"? | \\\\ [^ \\ r \\ n \\ f] | [\\ w-] | [^ \ 0 - \\ x7f]) +",

	// Selectores de atributos: http://www.w3.org/TR/selectors/#attribute-selectors
	atributos = "\\ [" + espacio en blanco + "* (" + identificador + ") (?:" + espacio en blanco +

		// Operador (captura 2)
		"* ([* ^ $ |! ~]? =)" + espacio en blanco +

		// "Los valores de los atributos deben ser identificadores CSS [captura 5]
		// o cadenas [captura 3 o captura 4] "
		"* (?: '((?: \\\\. | [^ \\\\']) *) '| \" ((?: \\\\. | [^ \\\\\ "] ) *) \ "| (" + identificador + ")) |)" +
		espacio en blanco + "* \\]",

	pseudos = ":(" + identificador + ") (?: \\ ((" +

		// Para reducir la cantidad de selectores que necesitan tokenizar en el preFilter, prefiera argumentos:
		// 1. citado (captura 3; captura 4 o captura 5)
		"('((?: \\\\. | [^ \\\\']) *) '| \" ((?: \\\\. | [^ \\\\\ "]) *) \ ") |" +

		// 2. simple (captura 6)
		"((?: \\\\. | [^ \\\\ () [\\]] |" + atributos + ") *) |" +

		// 3. cualquier otra cosa (captura 2)
		". *" +
		") \\) |)",

	// Espacios en blanco iniciales y finales sin escape, capturando algunos caracteres que no son espacios en blanco que preceden a este �ltimo
	rwhitespace = new RegExp (espacio en blanco + "+", "g"),
	rtrim = new RegExp ("^" + espacio en blanco + "+ | ((?: ^ | [^ \\\\]) (?: \\\\.) *)" +
		espacio en blanco + "+ $", "g"),

	rcomma = new RegExp ("^" + espacio en blanco + "*," + espacio en blanco + "*"),
	rcombinators = new RegExp ("^" + espacio en blanco + "* ([> + ~] |" + espacio en blanco + ")" + espacio en blanco +
		"*"),
	rdescend = new RegExp (espacio en blanco + "|>"),

	rpseudo = new RegExp (pseudos),
	ridentifier = new RegExp ("^" + identificador + "$"),

	matchExpr = {
		"ID": nueva expresi�n regular ("^ # (" + identificador + ")"),
		"CLASE": nueva RegExp ("^ \\. (" + Identificador + ")"),
		"TAG": nueva expresi�n regular ("^ (" + identificador + "| [*])"),
		"ATTR": nueva expresi�n regular ("^" + atributos),
		"PSEUDO": nueva expresi�n regular ("^" + pseudos),
		"NI�O": nueva RegExp ("^ :( s�lo | primero | �ltimo | en�simo | en�simo-�ltimo) - (ni�o | de tipo) (?: \\ (" +
			espacio en blanco + "* (par | impar | (([+ -] |) (\\ d *) n |)" + espacio en blanco + "* (?: ([+ -] |)" +
			espacio en blanco + "* (\\ d +) |))" + espacio en blanco + "* \\) |)", "i"),
		"bool": nueva expresi�n regular ("^ (?:" + booleanos + ") $", "i"),

		// Para usar en bibliotecas que implementan .is ()
		// Usamos esto para la coincidencia de POS en `select`
		"needContext": nueva expresi�n regular ("^" + espacio en blanco +
			"* [> + ~] |: (par | impar | eq | gt | lt | nth | primero | �ltimo) (?: \\ (" + espacio en blanco +
			"* ((?: - \\ d)? \\ d *)" + espacio en blanco + "* \\) |) (? = [^ -] | $)", "i")
	},

	rhtml = / HTML $ / i,
	rinputs = / ^ (?: entrada | seleccionar | �rea de texto | bot�n) $ / i,
	rheader = / ^ h \ d $ / i,

	rnative = / ^ [^ {] + \ {\ s * \ [nativo \ w /,

	// Selectores de ID o TAG o CLASE f�cilmente analizables / recuperables
	rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,

	rsibling = / [+ ~] /,

	// CSS escapa
	// http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
	runescape = new RegExp ("\\\\ [\\ da-fA-F] {1,6}" + espacio en blanco + "? | \\\\ ([^ \\ r \\ n \\ f])" , "g"),
	funescape = function (escape, nonHex) {
		var high = "0x" + escape.slice (1) - 0x10000;

		return nonHex?

			// Quita el prefijo de barra invertida de una secuencia de escape no hexadecimal
			no hexadecimal:

			// Reemplazar una secuencia de escape hexadecimal con el punto de c�digo Unicode codificado
			// Soporte: IE <= 11 +
			// Para valores fuera del plano multiling�e b�sico (BMP), construya manualmente un
			// pareja sustituta
			alto <0?
				String.fromCharCode (alto + 0x10000):
				String.fromCharCode (alto >> 10 | 0xD800, alto & 0x3FF | 0xDC00);
	},

	// serializaci�n de cadena / identificador CSS
	// https://drafts.csswg.org/cssom/#common-serializing-idioms
	rcssescape = / ([\ 0- \ x1f \ x7f] | ^ -? \ d) | ^ - $ | [^ \ 0- \ x1f \ x7f- \ uFFFF \ w -] / g,
	fcssescape = function (ch, asCodePoint) {
		if (asCodePoint) {

			// U + 0000 NULL se convierte en CAR�CTER DE REEMPLAZO U + FFFD
			si (ch === "\ 0") {
				devuelve "\ uFFFD";
			}

			// Los caracteres de control y los n�meros (dependiendo de la posici�n) se escapan como puntos de c�digo
			return ch.slice (0, -1) + "\\" +
				ch.charCodeAt (ch.length - 1) .toString (16) + "";
		}

		// Otros caracteres ASCII potencialmente especiales obtienen un escape con barra invertida
		return "\\" + ch;
	},

	// Usado para iframes
	// Ver setDocument ()
	// Eliminar el contenedor de la funci�n provoca un "Permiso denegado"
	// error en IE
	unloadHandler = function () {
		setDocument ();
	},

	inDisabledFieldset = addCombinator (
		funci�n (elem) {
			return elem.disabled === verdadero && elem.nodeName.toLowerCase () === "fieldset";
		},
		{dir: "parentNode", siguiente: "leyenda"}
	);

// Optimizar para push.apply (_, NodeList)
intentar {
	empujar.apply
		(arr = slice.call (favoriteDoc.childNodes)),
		preferidosDoc.childNodes
	);

	// Soporte: Android <4.0
	// Detecta push.apply fallido silenciosamente
	// eslint-disable-next-line no-unused-expresiones
	arr [preferenciaDoc.childNodes.length] .nodeType;
} captura (e) {
	push = {apply: arr.length?

		// Aprovechar el segmento si es posible
		function (target, els) {
			pushNative.apply (target, slice.call (els));
		}:

		// Soporte: IE <9
		// De lo contrario, agregue directamente
		function (target, els) {
			var j = target.length,
				i = 0;

			// No puedo confiar en NodeList.length
			while ((objetivo [j ++] = els [i ++])) {}
			longitud.objetivo = j - 1;
		}
	};
}

funci�n Sizzle (selector, contexto, resultados, semilla) {
	var m, i, elem, nid, coincidencia, grupos, newSelector,
		newContext = context && context.ownerDocument,

		// nodeType por defecto es 9, ya que el contexto por defecto es document
		nodeType = contexto? context.nodeType: 9;

	resultados = resultados || [];

	// Regrese antes de las llamadas con un selector o contexto no v�lido
	if (typeof selector! == "string" ||! selector ||
		nodeType! == 1 && nodeType! == 9 && nodeType! == 11) {

		devolver resultados;
	}

	// Intente atajar las operaciones de b�squeda (a diferencia de los filtros) en documentos HTML
	si (! semilla) {
		setDocument (contexto);
		contexto = contexto || documento;

		if (documentIsHTML) {

			// Si el selector es lo suficientemente simple, intente usar un m�todo DOM "get * By *"
			// (excepto el contexto DocumentFragment, donde los m�todos no existen)
			if (nodeType! == 11 && (match = rquickExpr.exec (selector))) {

				// selector de ID
				si ((m = coincidir [1])) {

					// Contexto del documento
					if (nodeType === 9) {
						if ((elem = context.getElementById (m))) {

							// Soporte: IE, Opera, Webkit
							// TODO: identificar versiones
							// getElementById puede hacer coincidir elementos por nombre en lugar de ID
							if (elem.id === m) {
								results.push (elem);
								devolver resultados;
							}
						} dem�s {
							devolver resultados;
						}

					// Contexto del elemento
					} dem�s {

						// Soporte: IE, Opera, Webkit
						// TODO: identificar versiones
						// getElementById puede hacer coincidir elementos por nombre en lugar de ID
						if (newContext && (elem = newContext.getElementById (m)) &&
							contiene (contexto, elem) &&
							elem.id === m) {

							results.push (elem);
							devolver resultados;
						}
					}

				// selector de tipo
				} m�s si (coincide con [2]) {
					push.apply (resultados, context.getElementsByTagName (selector));
					devolver resultados;

				// selector de clase
				} m�s si ((m = coincidir con [3]) && support.getElementsByClassName &&
					context.getElementsByClassName) {

					push.apply (resultados, context.getElementsByClassName (m));
					devolver resultados;
				}
			}

			// Aprovecha querySelectorAll
			si (support.qsa &&
				! nonnativeSelectorCache [selector + ""] &&
				(! rbuggyQSA ||! rbuggyQSA.test (selector)) &&

				// Soporte: solo IE 8
				// Excluir elementos de objeto
				(nodeType! == 1 || context.nodeName.toLowerCase ()! == "object")) {

				newSelector = selector;
				newContext = contexto;

				// qSA considera elementos fuera de una ra�z de alcance al evaluar al ni�o o
				// combinadores descendientes, que no es lo que queremos.
				// En tales casos, solucionamos el comportamiento colocando el prefijo de cada selector en el
				// lista con un selector de ID que hace referencia al contexto del alcance.
				// La t�cnica tambi�n debe usarse cuando se usa un combinador principal
				// como tales selectores no son reconocidos por querySelectorAll.
				// Gracias a Andrew Dupont por esta t�cnica.
				si (nodeType === 1 &&
					(rdescend.test (selector) || rcombinators.test (selector))) {

					// Expandir el contexto para los selectores de hermanos
					newContext = rsibling.test (selector) && testContext (context.parentNode) ||
						contexto;

					// Podemos usar: scope en lugar del truco de ID si el navegador
					// lo admite y si no estamos cambiando el contexto.
					if (newContext! == context ||! support.scope) {

						// Capture el ID de contexto, configur�ndolo primero si es necesario
						if ((nid = context.getAttribute ("id"))) {
							nid = nid.replace (rcssescape, fcssescape);
						} dem�s {
							context.setAttribute ("id", (nid = expandir));
						}
					}

					// Prefijo cada selector en la lista
					grupos = tokenizar (selector);
					i = grupos.longitud;
					mientras yo-- ) {
						grupos [i] = (nid? "#" + nid: ": scope") + "" +
							toSelector (grupos [i]);
					}
					newSelector = groups.join (",");
				}

				intentar {
					push.apply (resultados,
						newContext.querySelectorAll (newSelector)
					);
					devolver resultados;
				} catch (qsaError) {
					nonnativeSelectorCache (selector, verdadero);
				} finalmente {
					if (nid === expandir) {
						context.removeAttribute ("id");
					}
				}
			}
		}
	}

	// Todos los otros
	return select (selector.replace (rtrim, "$ 1"), contexto, resultados, semilla);
}

/ **
 * Crear cach�s de valores-clave de tama�o limitado
 * @returns {funci�n (cadena, objeto)} Devuelve los datos del objeto despu�s de almacenarlos en s� mismo con
 * nombre de propiedad de la cadena (con sufijo de espacio) y (si la cach� es mayor que Expr.cacheLength)
 * eliminar la entrada m�s antigua
 * /
function createCache () {
	var claves = [];

	funci�n cach� (clave, valor) {

		// Utilice (tecla + "") para evitar la colisi�n con las propiedades del prototipo nativo (consulte el n�mero 157)
		if (keys.push (key + "")> Expr.cacheLength) {

			// Conserve solo las entradas m�s recientes
			eliminar cach� [keys.shift ()];
		}
		return (cach� [clave + ""] = valor);
	}
	retorno de cach�;
}

/ **
 * Marcar una funci�n para uso especial de Sizzle
 * @param {Funci�n} fn La funci�n para marcar
 * /
funci�n markFunction (fn) {
	fn [expando] = verdadero;
	return fn;
}

/ **
 * Soporte de pruebas usando un elemento
 * @param {Funci�n} fn Pas� el elemento creado y devuelve un resultado booleano
 * /
funci�n aseverar (fn) {
	var el = document.createElement ("conjunto de campos");

	intentar {
		volver !! fn (el);
	} captura (e) {
		falso retorno;
	} finalmente {

		// Eliminar de su padre por defecto
		if (el.parentNode) {
			el.parentNode.removeChild (el);
		}

		// liberar memoria en IE
		el = nulo;
	}
}

/ **
 * Agrega el mismo controlador para todos los atributos especificados
 * @param {String} attrs Lista de atributos separados por tuber�a
 * @param {Function} handler El m�todo que se aplicar�
 * /
function addHandle (attrs, handler) {
	var arr = attrs.split ("|"),
		i = longitud de arr.;

	mientras yo-- ) {
		Expr.attrHandle [arr [i]] = controlador;
	}
}

/ **
 * Verifica el orden de los documentos de dos hermanos.
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Devuelve menos de 0 si a precede a b, mayor que 0 si a sigue a b
 * /
function siblingCheck (a, b) {
	var cur = b && a,
		diff = cur && a.nodeType === 1 && b.nodeType === 1 &&
			a.sourceIndex - b.sourceIndex;

	// Use IE sourceIndex si est� disponible en ambos nodos
	if (diff) {
		return diff;
	}

	// Comprueba si b sigue a
	si (cur) {
		while ((cur = cur.nextSibling)) {
			si (cur === b) {
				return -1;
			}
		}
	}

	devolver un? 1: -1;
}

/ **
 * Devuelve una funci�n para usar en pseudos para tipos de entrada
 * @param {String} tipo
 * /
function createInputPseudo (type) {
	funci�n de retorno (elem) {
		var name = elem.nodeName.toLowerCase ();
		nombre de retorno === "entrada" && elem.type === tipo;
	};
}

/ **
 * Devuelve una funci�n para usar en pseudos para botones
 * @param {String} tipo
 * /
function createButtonPseudo (type) {
	funci�n de retorno (elem) {
		var name = elem.nodeName.toLowerCase ();
		return (nombre === "entrada" || nombre === "bot�n") && elem.type === tipo;
	};
}

/ **
 * Devuelve una funci�n para usar en pseudos para: habilitado /: deshabilitado
 * @param {Boolean} desactivado verdadero para: desactivado; falso para: habilitado
 * /
function createDisabledPseudo (deshabilitado) {

	// Conocido: falsos positivos deshabilitados: fieldset [deshabilitado]> leyenda: nth-of-type (n + 2): can-disable
	funci�n de retorno (elem) {

		// Solo ciertos elementos pueden coincidir: habilitado o: deshabilitado
		// https://html.spec.whatwg.org/multipage/scripting.html#selector-enabled
		// https://html.spec.whatwg.org/multipage/scripting.html#selector-disabled
		if ("formulario" en elem) {

			// Verifique la discapacidad heredada en elementos relevantes no discapacitados:
			// * enumera los elementos asociados al formulario en un conjunto de campos deshabilitado
			// https://html.spec.whatwg.org/multipage/forms.html#category-listed
			// https://html.spec.whatwg.org/multipage/forms.html#concept-fe-disabled
			// * elementos de opci�n en un optgroup deshabilitado
			// https://html.spec.whatwg.org/multipage/forms.html#concept-option-disabled
			// Todos estos elementos tienen una propiedad de "formulario".
			if (elem.parentNode && elem.disabled === false) {

				// Los elementos de opci�n se remiten a un optgroup padre si est� presente
				if ("etiqueta" en elem) {
					if ("etiqueta" en elem.parentNode) {
						return elem.parentNode.disabled === desactivado;
					} dem�s {
						return elem.disabled === desactivado;
					}
				}

				// Soporte: IE 6 - 11
				// Use la propiedad de acceso directo isDisabled para buscar antepasados ??de conjuntos de campos deshabilitados
				return elem.isDisabled === desactivado ||

					// Donde no hay isDisabled, verifique manualmente
					/ * jshint -W018 * /
					elem.isDisabled! ==! disabled &&
					inDisabledFieldset (elem) === desactivado;
			}

			return elem.disabled === desactivado;

		// Intente eliminar los elementos que no se pueden deshabilitar antes de confiar en la propiedad deshabilitada.
		// Algunas v�ctimas quedan atrapadas en nuestra red (etiqueta, leyenda, men�, pista), pero no deber�a
		// incluso existen en ellos, y mucho menos tienen un valor booleano.
		} else if ("etiqueta" en elem) {
			return elem.disabled === desactivado;
		}

		// Los elementos restantes no est�n: habilitados ni: deshabilitados
		falso retorno;
	};
}

/ **
 * Devuelve una funci�n para usar en pseudos para posicionales
 * @param {Funci�n} fn
 * /
function createPositionalPseudo (fn) {
	return markFunction (funci�n (argumento) {
		argumento = + argumento;
		return markFunction (funci�n (semilla, coincidencias) {
			var j,
				matchIndexes = fn ([], seed.length, argumento),
				i = matchIndexes.length;

			// Coincidencia de elementos encontrados en los �ndices especificados
			mientras yo-- ) {
				if (semilla [(j = matchIndexes [i])]) {
					semilla [j] =! (coincide con [j] = semilla [j]);
				}
			}
		});
	});
}

/ **
 * Comprueba la validez de un nodo como contexto Sizzle
 * @param {Elemento | Objeto =} contexto
 * @returns {Elemento | Objeto | Booleano} El nodo de entrada si es aceptable; de ??lo contrario, un valor falso
 * /
function testContext (context) {
	return context && typeof context.getElementsByTagName! == "undefined" && context;
}

// Exponer vars de soporte por conveniencia
soporte = Sizzle.support = {};

/ **
 * Detecta nodos XML
 * @param {Elemento | Objeto} elem Un elemento o un documento
 * @returns {Boolean} Verdadero si el elemento es un nodo XML que no es HTML
 * /
isXML = Sizzle.isXML = funci�n (elem) {
	var espacio de nombres = elem && elem.namespaceURI,
		docElem = elem && (elem.ownerDocument || elem) .documentElement;

	// Soporte: IE <= 8
	// Asumir HTML cuando documentElement a�n no existe, como en el interior de iframes de carga
	// https://bugs.jquery.com/ticket/4833
	return! rhtml.test (espacio de nombres || docElem && docElem.nodeName || "HTML");
};

/ **
 * Establece variables relacionadas con el documento una vez basadas en el documento actual
 * @param {Elemento | Objeto} [doc] Un elemento u objeto de documento que se utilizar� para configurar el documento.
 * @returns {Object} Devuelve el documento actual
 * /
setDocument = Sizzle.setDocument = function (nodo) {
	var hasCompare, subWindow,
		doc = nodo? node.ownerDocument || nodo: favoriteDoc;

	// Regrese antes si el documento no es v�lido o ya est� seleccionado
	// Soporte: IE 11+, Edge 17 - 18+
	// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
	// dos documentos; las comparaciones superficiales funcionan.
	// eslint-disable-next-line eqeqeq
	if (doc == documento || doc.nodeType! == 9 ||! doc.documentElement) {
		documento de devoluci�n;
	}

	// Actualizar variables globales
	document = doc;
	docElem = document.documentElement;
	documentIsHTML =! isXML (documento);

	// Soporte: IE 9 - 11+, Edge 12 - 18+
	// Acceder a los documentos iframe despu�s de la descarga arroja errores de "permiso denegado" (jQuery # 13936)
	// Soporte: IE 11+, Edge 17 - 18+
	// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
	// dos documentos; las comparaciones superficiales funcionan.
	// eslint-disable-next-line eqeqeq
	si (preferidoDoc! = documento &&
		(subWindow = document.defaultView) && subWindow.top! == subWindow) {

		// Soporte: IE 11, Edge
		if (subWindow.addEventListener) {
			subWindow.addEventListener ("descargar", unloadHandler, falso);

		// Soporte: IE 9 - 10 solamente
		} else if (subWindow.attachEvent) {
			subWindow.attachEvent ("onunload", unloadHandler);
		}
	}

	// Soporte: IE 8 - 11+, Edge 12 - 18+, Chrome <= 16 - 25 solamente, Firefox <= 3.6 - 31 solamente,
	// Safari 4 - 5 solamente, Opera <= 11.6 - 12.x solamente
	// IE / Edge y los navegadores m�s antiguos no admiten la pseudoclase: scope.
	// Soporte: Safari 6.0 solamente
	// Safari 6.0 admite: scope pero es un alias de: root all�.
	support.scope = assert (function (el) {
		docElem.appendChild (el) .appendChild (document.createElement ("div"));
		return typeof el.querySelectorAll! == "undefined" &&
			! el.querySelectorAll (": campo de alcance div") .length;
	});

	/ * Atributos
	-------------------------------------------------- -------------------- * /

	// Soporte: IE <8
	// Verifica que getAttribute realmente devuelva atributos y no propiedades
	// (excepto los booleanos IE8)
	support.attributes = assert (function (el) {
		el.className = "i";
		return! el.getAttribute ("className");
	});

	/ * getElement (s) por *
	-------------------------------------------------- -------------------- * /

	// Verifica si getElementsByTagName ("*") devuelve solo elementos
	support.getElementsByTagName = assert (function (el) {
		el.appendChild (document.createComment (""));
		return! el.getElementsByTagName ("*") .length;
	});

	// Soporte: IE <9
	support.getElementsByClassName = rnative.test (document.getElementsByClassName);

	// Soporte: IE <10
	// Verifica si getElementById devuelve elementos por nombre
	// Los m�todos rotos getElementById no recogen nombres establecidos mediante programaci�n,
	// as� que usa una prueba indirecta getElementsByName
	support.getById = assert (function (el) {
		docElem.appendChild (el) .id = expandir;
		return! document.getElementsByName || ! document.getElementsByName (expando) .length;
	});

	// ID filtrar y buscar
	if (support.getById) {
		Expr.filter ["ID"] = funci�n (id) {
			var attrId = id.replace (runescape, funescape);
			funci�n de retorno (elem) {
				return elem.getAttribute ("id") === attrId;
			};
		};
		Expr.find ["ID"] = funci�n (id, contexto) {
			if (typeof context.getElementById! == "undefined" && documentIsHTML) {
				var elem = context.getElementById (id);
				volver elem? [elem]: [];
			}
		};
	} dem�s {
		Expr.filter ["ID"] = funci�n (id) {
			var attrId = id.replace (runescape, funescape);
			funci�n de retorno (elem) {
				var nodo = tipo de elem.getAttributeNode! == "indefinido" &&
					elem.getAttributeNode ("id");
				return nodo && node.value === attrId;
			};
		};

		// Soporte: IE 6 - 7 solamente
		// getElementById no es confiable como atajo de b�squeda
		Expr.find ["ID"] = funci�n (id, contexto) {
			if (typeof context.getElementById! == "undefined" && documentIsHTML) {
				var nodo, yo, elems,
					elem = context.getElementById (id);

				si (elem) {

					// Verifica el atributo id
					nodo = elem.getAttributeNode ("id");
					if (nodo && node.value === id) {
						return [elem];
					}

					// Recurrir a getElementsByName
					elems = context.getElementsByName (id);
					i = 0;
					while ((elem = elems [i ++])) {
						nodo = elem.getAttributeNode ("id");
						if (nodo && node.value === id) {
							return [elem];
						}
					}
				}

				regreso [];
			}
		};
	}

	// Etiqueta
	Expr.find ["TAG"] = support.getElementsByTagName?
		funci�n (etiqueta, contexto) {
			if (typeof context.getElementsByTagName! == "undefined") {
				return context.getElementsByTagName (etiqueta);

			// Los nodos DocumentFragment no tienen gEBTN
			} else if (support.qsa) {
				return context.querySelectorAll (etiqueta);
			}
		}:

		funci�n (etiqueta, contexto) {
			var elem,
				tmp = [],
				i = 0,

				// Por feliz coincidencia, un gEBTN (roto) tambi�n aparece en los nodos de DocumentFragment
				resultados = context.getElementsByTagName (etiqueta);

			// Filtrar posibles comentarios
			si (etiqueta === "*") {
				while ((elem = results [i ++])) {
					if (elem.nodeType === 1) {
						tmp.push (elem);
					}
				}

				return tmp;
			}
			devolver resultados;
		};

	// Clase
	Expr.find ["CLASE"] = support.getElementsByClassName && function (className, context) {
		if (typeof context.getElementsByClassName! == "undefined" && documentIsHTML) {
			return context.getElementsByClassName (className);
		}
	};

	/ * QSA / MatchSelector
	-------------------------------------------------- -------------------- * /

	// Soporte QSA y MatchSelector

	// MatchSelector (: active) informa falso cuando es verdadero (IE9 / Opera 11.5)
	rbuggyMatches = [];

	// qSa (: focus) informa falso cuando es verdadero (Chrome 21)
	// Permitimos esto debido a un error en IE8 / 9 que arroja un error
	// siempre que se accede a `document.activeElement` en un iframe
	// Entonces, permitimos que: focus pase por QSA todo el tiempo para evitar el error de IE
	// Ver https://bugs.jquery.com/ticket/13378
	rbuggyQSA = [];

	if ((support.qsa = rnative.test (document.querySelectorAll))) {

		// Construye QSA regex
		// Estrategia de regex adoptada por Diego Perini
		afirmar (funci�n (el) {

			var input;

			// Seleccionar se establece en una cadena vac�a a prop�sito
			// Esto es para probar el tratamiento de IE de no expl�citamente
			// establecer un atributo de contenido booleano,
			// ya que su presencia deber�a ser suficiente
			// https://bugs.jquery.com/ticket/12359
			docElem.appendChild (el) .innerHTML = "<a id='" + expando + "'> </a>" +
				"<select id = '" + expando + "- \ r \\' msallowcapture = ''>" +
				"<option selected = ''> </option> </select>";

			// Soporte: IE8, Opera 11-12.16
			// No se debe seleccionar nada cuando siguen cadenas vac�as ^ = o $ = o * =
			// El atributo de prueba debe ser desconocido en Opera pero "seguro" para WinRT
			// https://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
			if (el.querySelectorAll ("[msallowcapture ^ = '']") .length) {
				rbuggyQSA.push ("[* ^ $] =" + espacio en blanco + "* (?: '' | \" \ ")");
			}

			// Soporte: IE8
			// Los atributos booleanos y el "valor" no se tratan correctamente
			if (! el.querySelectorAll ("[seleccionado]") .length) {
				rbuggyQSA.push ("\\ [" + espacio en blanco + "* (?: valor |" + booleanos + ")");
			}

			// Soporte: Chrome <29, Android <4.4, Safari <7.0+, iOS <7.0+, PhantomJS <1.9.8+
			if (! el.querySelectorAll ("[id ~ =" + expando + "-]") .length) {
				rbuggyQSA.push ("~ =");
			}

			// Soporte: IE 11+, Edge 15 - 18+
			// IE 11 / Edge no encuentra elementos en una consulta `[name = '']` en algunos casos.
			// Agregar un atributo temporal al documento antes de que funcione la selecci�n
			// en torno al problema.
			// Curiosamente, IE 10 y versiones anteriores no parecen tener el problema.
			input = document.createElement ("entrada");
			input.setAttribute ("nombre", "");
			el.appendChild (entrada);
			if (! el.querySelectorAll ("[nombre = '']") .length) {
				rbuggyQSA.push ("\\ [" + espacio en blanco + "* nombre" + espacio en blanco + "* =" +
					espacio en blanco + "* (?: '' | \" \ ")");
			}

			// Webkit / Opera -: marcado debe devolver los elementos de opci�n seleccionados
			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
			// IE8 arroja un error aqu� y no ver� pruebas posteriores
			if (! el.querySelectorAll (": comprobado") .length) {
				rbuggyQSA.push (": comprobado");
			}

			// Soporte: Safari 8+, iOS 8+
			// https://bugs.webkit.org/show_bug.cgi?id=136851
			// In-page `selector # id sibling-combinator selector` falla
			if (! el.querySelectorAll ("a #" + expando + "+ *") .length) {
				rbuggyQSA.push (". #. + [+ ~]");
			}

			// Soporte: Firefox <= 3.6 - 5 solamente
			// Old Firefox no arroja un identificador mal escapado.
			el.querySelectorAll ("\\\ f");
			rbuggyQSA.push ("[\\ r \\ n \\ f]");
		});

		afirmar (funci�n (el) {
			el.innerHTML = "<a href='' disabled='disabled'> </a>" +
				"<select disabled = 'disabled'> <option /> </select>";

			// Soporte: Aplicaciones nativas de Windows 8
			// Los atributos de tipo y nombre est�n restringidos durante la asignaci�n .innerHTML
			var input = document.createElement ("entrada");
			input.setAttribute ("tipo", "oculto");
			el.appendChild (entrada) .setAttribute ("nombre", "D");

			// Soporte: IE8
			// Hacer cumplir la distinci�n entre may�sculas y min�sculas del atributo de nombre
			if (el.querySelectorAll ("[nombre = d]") .length) {
				rbuggyQSA.push ("nombre" + espacio en blanco + "* [* ^ $ |! ~]? =");
			}

			// FF 3.5 -: habilitado /: elementos deshabilitados y ocultos (los elementos ocultos todav�a est�n habilitados)
			// IE8 arroja un error aqu� y no ver� pruebas posteriores
			if (el.querySelectorAll (": habilitado") .length! == 2) {
				rbuggyQSA.push (": habilitado", ": deshabilitado");
			}

			// Soporte: IE9-11 +
			// IE's: el selector desactivado no recoge los hijos de los conjuntos de campos desactivados
			docElem.appendChild (el) .disabled = true;
			if (el.querySelectorAll (": deshabilitado") .length! == 2) {
				rbuggyQSA.push (": habilitado", ": deshabilitado");
			}

			// Soporte: Opera 10-11 solamente
			// Opera 10-11 no lanza pseudos inv�lidos post-coma
			el.querySelectorAll ("* ,: x");
			rbuggyQSA.push (",. *:");
		});
	}

	if ((support.matchesSelector = rnative.test ((coincidencias = docElem.matches ||
		docElem.webkitMatchesSelector ||
		docElem.mozMatchesSelector ||
		docElem.oMatchesSelector ||
		docElem.msMatchesSelector)))) {

		afirmar (funci�n (el) {

			// Comprueba si es posible hacer coincidencias
			// en un nodo desconectado (IE 9)
			support.disconnectedMatch = coincidencias.call (el, "*");

			// Esto deber�a fallar con una excepci�n
			// Gecko no se equivoca, devuelve falso en su lugar
			coincidencias.call (el, "[s! = '']: x");
			rbuggyMatches.push ("! =", pseudos);
		});
	}

	rbuggyQSA = rbuggyQSA.length && new RegExp (rbuggyQSA.join ("|"));
	rbuggyMatches = rbuggyMatches.length && new RegExp (rbuggyMatches.join ("|"));

	/ * Contiene
	-------------------------------------------------- -------------------- * /
	hasCompare = rnative.test (docElem.compareDocumentPosition);

	// El elemento contiene otro
	// A prop�sito auto-exclusivo
	// Como en, un elemento no se contiene a s� mismo
	contiene = hasCompare || rnative.test (docElem.contains)?
		funci�n (a, b) {
			var adown = a.nodeType === 9? a.documentElement: a,
				bup = b && b.parentNode;
			devuelve un === bup || !! (bup && bup.nodeType === 1 && (
				adown.contains?
					adown.contains (bup):
					a.compareDocumentPosition && a.compareDocumentPosition (bup) & 16
			));
		}:
		funci�n (a, b) {
			si (b) {
				while ((b = b.parentNode)) {
					si (b === a) {
						devuelve verdadero;
					}
				}
			}
			falso retorno;
		};

	/ * Clasificaci�n
	-------------------------------------------------- -------------------- * /

	// Clasificaci�n del orden de los documentos
	sortOrder = hasCompare?
	funci�n (a, b) {

		// Marcar para eliminaci�n de duplicados
		si (a === b) {
			hasDuplicate = true;
			return 0;
		}

		// Ordenar seg�n la existencia del m�todo si solo una entrada tiene compareDocumentPosition
		var compare =! a.compareDocumentPosition -! b.compareDocumentPosition;
		si (comparar) {
			retorno comparar;
		}

		// Calcula la posici�n si ambas entradas pertenecen al mismo documento
		// Soporte: IE 11+, Edge 17 - 18+
		// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
		// dos documentos; las comparaciones superficiales funcionan.
		// eslint-disable-next-line eqeqeq
		comparar = (a.ownerDocument || a) == (b.ownerDocument || b)?
			a.compareDocumentPosition (b):

			// De lo contrario, sabemos que est�n desconectados
			1;

		// Nodos desconectados
		si (comparar & 1 ||
			(! support.sortDetached && b.compareDocumentPosition (a) === compare)) {

			// Elija el primer elemento relacionado con nuestro documento preferido
			// Soporte: IE 11+, Edge 17 - 18+
			// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
			// dos documentos; las comparaciones superficiales funcionan.
			// eslint-disable-next-line eqeqeq
			if (un == documento || a.ownerDocument == preferidoDoc &&
				contiene (preferidoDoc, a)) {
				return -1;
			}

			// Soporte: IE 11+, Edge 17 - 18+
			// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
			// dos documentos; las comparaciones superficiales funcionan.
			// eslint-disable-next-line eqeqeq
			if (b == documento || b.ownerDocument == preferidoDoc &&
				contiene (preferidoDoc, b)) {
				return 1;
			}

			// Mantener el orden original
			return sortInput?
				(indexOf (sortInput, a) - indexOf (sortInput, b)):
				0;
		}

		volver comparar & 4? -1: 1;
	}:
	funci�n (a, b) {

		// Salir temprano si los nodos son id�nticos
		si (a === b) {
			hasDuplicate = true;
			return 0;
		}

		var cur,
			i = 0,
			aup = a.parentNode,
			bup = b.parentNode,
			ap = [a],
			bp = [b];

		// Los nodos sin padres son documentos o est�n desconectados
		si (! aup ||! bup) {

			// Soporte: IE 11+, Edge 17 - 18+
			// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
			// dos documentos; las comparaciones superficiales funcionan.
			/ * eslint-deshabilitar eqeqeq * /
			devolver un == documento? -1:
				b == documento? 1:
				/ * eslint-enable eqeqeq * /
				aup? -1:
				bup? 1:
				sortInput?
				(indexOf (sortInput, a) - indexOf (sortInput, b)):
				0;

		// Si los nodos son hermanos, podemos hacer una comprobaci�n r�pida
		} m�s si (aup === bup) {
			return siblingCheck (a, b);
		}

		// De lo contrario, necesitamos listas completas de sus antepasados ??para comparar
		cur = a;
		while ((cur = cur.parentNode)) {
			ap.unshift (cur);
		}
		cur = b;
		while ((cur = cur.parentNode)) {
			bp.unshift (cur);
		}

		// Camina por el �rbol en busca de una discrepancia
		while (ap [i] === bp [i]) {
			i ++;
		}

		regreso yo?

			// Hacer una verificaci�n de hermanos si los nodos tienen un ancestro com�n
			siblingCheck (ap [i], bp [i]):

			// De lo contrario, los nodos en nuestro documento se ordenan primero
			// Soporte: IE 11+, Edge 17 - 18+
			// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
			// dos documentos; las comparaciones superficiales funcionan.
			/ * eslint-deshabilitar eqeqeq * /
			ap [i] == favoriteDoc? -1:
			bp [i] == favoriteDoc? 1:
			/ * eslint-enable eqeqeq * /
			0;
	};

	documento de devoluci�n;
};

Sizzle.matches = function (expr, elementos) {
	return Sizzle (expr, null, null, elementos);
};

Sizzle.matchesSelector = function (elem, expr) {
	setDocument (elem);

	if (support.matchesSelector && documentIsHTML &&
		! nonnativeSelectorCache [expr + ""] &&
		(! rbuggyMatches ||! rbuggyMatches.test (expr)) &&
		(! rbuggyQSA ||! rbuggyQSA.test (expr))) {

		intentar {
			var ret = coincidencias.call (elem, expr);

			// MatchSelector de IE 9 devuelve falso en los nodos desconectados
			if (ret || support.disconnectedMatch ||

				// Adem�s, se dice que los nodos desconectados est�n en un documento
				// fragmento en IE 9
				elem.document && elem.document.nodeType! == 11) {
				return ret;
			}
		} captura (e) {
			nonnativeSelectorCache (expr, true);
		}
	}

	return Sizzle (expr, document, null, [elem]) .length> 0;
};

Sizzle.contains = function (context, elem) {

	// Establecer variables de documento si es necesario
	// Soporte: IE 11+, Edge 17 - 18+
	// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
	// dos documentos; las comparaciones superficiales funcionan.
	// eslint-disable-next-line eqeqeq
	if ((context.ownerDocument || context)! = document) {
		setDocument (contexto);
	}
	return contiene (contexto, elem);
};

Sizzle.attr = function (elem, name) {

	// Establecer variables de documento si es necesario
	// Soporte: IE 11+, Edge 17 - 18+
	// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
	// dos documentos; las comparaciones superficiales funcionan.
	// eslint-disable-next-line eqeqeq
	if ((elem.ownerDocument || elem)! = documento) {
		setDocument (elem);
	}

	var fn = Expr.attrHandle [name.toLowerCase ()],

		// No se deje enga�ar por las propiedades de Object.prototype (jQuery # 13807)
		val = fn && hasOwn.call (Expr.attrHandle, name.toLowerCase ())?
			fn (elem, nombre,! documentIsHTML):
			indefinido;

	return val! == indefinido?
		val:
		support.attributes || ! documentIsHTML?
			elem.getAttribute (nombre):
			(val = elem.getAttributeNode (nombre)) && val.specified?
				val.value:
				nulo;
};

Sizzle.escape = function (sel) {
	return (sel + "") .replace (rcssescape, fcssescape);
};

Sizzle.error = function (msg) {
	lanzar nuevo Error ("Error de sintaxis, expresi�n no reconocida:" + msg);
};

/ **
 * Clasificaci�n de documentos y eliminaci�n de duplicados
 * @param {ArrayLike} resultados
 * /
Sizzle.uniqueSort = function (results) {
	var elem,
		duplicados = [],
		j = 0,
		i = 0;

	// A menos que * sepamos * que podemos detectar duplicados, asumimos su presencia
	hasDuplicate =! support.detectDuplicates;
	sortInput =! support.sortStable && results.slice (0);
	results.sort (sortOrder);

	if (hasDuplicate) {
		while ((elem = results [i ++])) {
			if (elem === resultados [i]) {
				j = duplicados.push (i);
			}
		}
		while (j--) {
			results.splice (duplica [j], 1);
		}
	}

	// Borrar la entrada despu�s de ordenar para liberar objetos
	// Ver https://github.com/jquery/sizzle/pull/225
	sortInput = nulo;

	devolver resultados;
};

/ **
 * Funci�n de utilidad para recuperar el valor de texto de una matriz de nodos DOM
 * @param {Array | Element} elem
 * /
getText = Sizzle.getText = function (elem) {
	nodo var,
		ret = "",
		i = 0,
		nodeType = elem.nodeType;

	if (! nodeType) {

		// Si no hay nodeType, se espera que sea una matriz
		while ((nodo = elem [i ++])) {

			// No atravesar los nodos de comentarios
			ret + = getText (nodo);
		}
	} else if (nodeType === 1 || nodeType === 9 || nodeType === 11) {

		// Usa textContent para elementos
		// uso de innerText eliminado para la coherencia de las nuevas l�neas (jQuery # 11153)
		if (typeof elem.textContent === "cadena") {
			return elem.textContent;
		} dem�s {

			// Atraviesa a sus hijos
			para (elem = elem.firstChild; elem; elem = elem.nextSibling) {
				ret + = getText (elem);
			}
		}
	} else if (nodeType === 3 || nodeType === 4) {
		return elem.nodeValue;
	}

	// No incluya comentarios o nodos de instrucci�n de procesamiento

	return ret;
};

Expr = Sizzle.selectors = {

	// Puede ser ajustado por el usuario
	cacheLength: 50,

	createPseudo: markFunction,

	match: matchExpr,

	attrHandle: {},

	encontrar: {},

	relativo: {
		">": {dir: "parentNode", primero: verdadero},
		"": {dir: "parentNode"},
		"+": {dir: "hermano anterior", primero: verdadero},
		"~": {dir: "hermano anterior"}
	},

	preFilter: {
		"ATTR": funci�n (coincidencia) {
			coincidir [1] = coincidir [1] .replace (runescape, funescape);

			// Mover el valor dado para que coincida con [3] ya sea entre comillas o sin comillas
			partido [3] = (partido [3] || partido [4] ||
				partido [5] || "") .replace (runescape, funescape);

			si (coincide con [2] === "~ =") {
				coincidir [3] = "" + coincidir [3] + "";
			}

			return match.slice (0, 4);
		},

		"NI�O": funci�n (partido) {

			/ * coincidencias de matchExpr ["CHILD"]
				1 tipo (solo | nth | ...)
				2 qu� (hijo | de tipo)
				3 argumento (par | impar | \ d * | \ d * n ([+ -] \ d +)? | ...)
				4 componente xn del argumento xn + y ([+ -]? \ D * n |)
				5 signo de componente xn
				6 x de componente xn
				7 signo de componente y
				8 a�os de componente y
			* /
			coincidir [1] = coincidir [1] .toLowerCase ();

			if (coincide con [1] .slice (0, 3) === "nth") {

				// nth- * requiere argumento
				if (! match [3]) {
					Sizzle.error (coincide con [0]);
				}

				// par�metros num�ricos xey para Expr.filter.CHILD
				// recuerda que falso / verdadero se lanza respectivamente a 0/1
				coincidir [4] = + (coincidir [4]?
					coincide con [5] + (coincide con [6] || 1):
					2 * (coincide con [3] === "par" || coincide con [3] === "impar"));
				igualar [5] = + ((igualar [7] + igualar [8]) || igualar [3] === "impar");

				// otros tipos proh�ben argumentos
			} m�s si (coincide con [3]) {
				Sizzle.error (coincide con [0]);
			}

			partido de vuelta;
		},

		"PSEUDO": funci�n (coincidencia) {
			var exceso,
				unquoted =! match [6] && match [2];

			if (matchExpr ["NI�O"] .test (match [0])) {
				devolver nulo;
			}

			// Acepta los argumentos citados tal cual
			si (coincide con [3]) {
				partido [2] = partido [4] || partido [5] || "";

			// Elimina el exceso de caracteres de los argumentos sin comillas
			} else if (sin comillas && rpseudo.test (sin comillas) &&

				// Obtener el exceso de tokenize (recursivamente)
				(exceso = tokenizar (sin comillas, verdadero)) &&

				// avanzar al siguiente par�ntesis de cierre
				(exceso = unquoted.indexOf (")", unquoted.length - exceso) - unquoted.length)) {

				// el exceso es un �ndice negativo
				igualar [0] = igualar [0] .slice (0, exceso);
				partido [2] = unquoted.slice (0, exceso);
			}

			// Devuelve solo las capturas que necesita el m�todo de pseudo filtro (tipo y argumento)
			return match.slice (0, 3);
		}
	},

	filtro: {

		"TAG": funci�n (nodeNameSelector) {
			var nodeName = nodeNameSelector.replace (runescape, funescape) .toLowerCase ();
			return nodeNameSelector === "*"?
				function () {
					devuelve verdadero;
				}:
				funci�n (elem) {
					return elem.nodeName && elem.nodeName.toLowerCase () === nodeName;
				};
		},

		"CLASE": funci�n (className) {
			var patr�n = classCache [className + ""];

			patr�n de retorno ||
				(patr�n = nueva expresi�n regular ("(^ |" + espacio en blanco +
					")" + className + "(" + espacio en blanco + "| $)")) && classCache (
						className, funci�n (elem) {
							patr�n de retorno.prueba (
								typeof elem.className === "cadena" && elem.className ||
								typeof elem.getAttribute! == "indefinido" &&
									elem.getAttribute ("clase") ||
								""
							);
				});
		},

		"ATTR": funci�n (nombre, operador, verificaci�n) {
			funci�n de retorno (elem) {
				var result = Sizzle.attr (elem, name);

				si (resultado == nulo) {
					operador de retorno === "! =";
				}
				if (! operator) {
					devuelve verdadero;
				}

				resultado + = "";

				/ * eslint-disable max-len * /

				operador de retorno === "="? resultado === comprobar:
					operador === "! ="? resultado! == comprobar:
					operador === "^ ="? comprobar && result.indexOf (comprobar) === 0:
					operador === "* ="? comprobar && result.indexOf (comprobar)> -1:
					operador === "$ ="? comprobar && result.slice (-check.length) === comprobar:
					operador === "~ ="? ("" + result.replace (rwhitespace, "") + "") .indexOf (comprobar)> -1:
					operador === "| ="? resultado === comprobar || result.slice (0, check.length + 1) === check + "-":
					falso;
				/ * eslint-enable max-len * /

			};
		},

		"NI�O": funci�n (tipo, qu�, _argumento, primero, �ltimo) {
			var simple = type.slice (0, 3)! == "nth",
				forward = type.slice (-4)! == "last",
				ofType = what === "of-type";

			volver primero === 1 && �ltimo === 0?

				// Atajo para: nth - * (n)
				funci�n (elem) {
					return !! elem.parentNode;
				}:

				funci�n (elem, _context, xml) {
					var cache, uniqueCache, outerCache, node, nodeIndex, start,
						dir = simple! == hacia adelante? "nextSibling": "previousSibling",
						parent = elem.parentNode,
						nombre = ofType && elem.nodeName.toLowerCase (),
						useCache =! xml &&! ofType,
						diff = falso;

					if (padre) {

						//: (primero | �ltimo | solo) - (hijo | de tipo)
						if (simple) {
							while (dir) {
								nodo = elem;
								while ((nodo = nodo [dir])) {
									si (deTipo?
										node.nodeName.toLowerCase () === nombre:
										node.nodeType === 1) {

										falso retorno;
									}
								}

								// Direcci�n inversa para: solo- * (si a�n no lo hemos hecho)
								start = dir = type === "only" &&! start && "nextSibling";
							}
							devuelve verdadero;
						}

						start = [forward? parent.firstChild: parent.lastChild];

						// no xml: nth-child (...) almacena datos de cach� en `parent`
						if (reenviar && useCache) {

							// Busca `elem` de un �ndice previamente almacenado en cach�

							// ... de una manera compatible con gzip
							nodo = padre;
							externalCache = nodo [expando] || (nodo [expandir] = {});

							// Soporte: IE <9 solamente
							// Defi�ndete de las attroperties clonadas (jQuery gh-1709)
							UniqueCache = ExternalCache [node.uniqueID] ||
								(ExternalCache [node.uniqueID] = {});

							cache = uniqueCache [tipo] || [];
							nodeIndex = cache [0] === dirruns && cache [1];
							diff = nodeIndex && cache [2];
							node = nodeIndex && parent.childNodes [nodeIndex];

							while ((nodo = ++ nodeIndex && nodo && nodo [dir] ||

								// Recurrir a buscar `elem` desde el principio
								(diff = nodeIndex = 0) || start.pop ())) {

								// Cuando se encuentra, almacena en cach� los �ndices en `parent` y rompe
								if (node.nodeType === 1 && ++ diff && node === elem) {
									uniqueCache [tipo] = [dirruns, nodeIndex, diff];
									rotura;
								}
							}

						} dem�s {

							// Use el �ndice de elementos previamente almacenado en cach� si est� disponible
							if (useCache) {

								// ... de una manera compatible con gzip
								nodo = elem;
								externalCache = nodo [expando] || (nodo [expandir] = {});

								// Soporte: IE <9 solamente
								// Defi�ndete de las attroperties clonadas (jQuery gh-1709)
								UniqueCache = ExternalCache [node.uniqueID] ||
									(ExternalCache [node.uniqueID] = {});

								cache = uniqueCache [tipo] || [];
								nodeIndex = cache [0] === dirruns && cache [1];
								diff = nodeIndex;
							}

							// xml: nth-child (...)
							// o: nth-last-child (...) o: nth (-last)? - of-type (...)
							if (diff === falso) {

								// Usa el mismo ciclo anterior para buscar `elem` desde el principio
								while ((nodo = ++ nodeIndex && nodo && nodo [dir] ||
									(diff = nodeIndex = 0) || start.pop ())) {

									si ((deTipo?
										node.nodeName.toLowerCase () === nombre:
										node.nodeType === 1) &&
										++ diff) {

										// Almacene en cach� el �ndice de cada elemento encontrado
										if (useCache) {
											externalCache = nodo [expando] ||
												(nodo [expandir] = {});

											// Soporte: IE <9 solamente
											// Defi�ndete de las attroperties clonadas (jQuery gh-1709)
											UniqueCache = ExternalCache [node.uniqueID] ||
												(ExternalCache [node.uniqueID] = {});

											UniqueCache [tipo] = [dirruns, diff];
										}

										si (nodo === elem) {
											rotura;
										}
									}
								}
							}
						}

						// Incorpore el desplazamiento, luego verifique el tama�o del ciclo
						diff - = �ltimo;
						return diff === primero || (diff% first === 0 && diff / first> = 0);
					}
				};
		},

		"PSEUDO": funci�n (pseudo, argumento) {

			// los nombres de pseudo-clases no distinguen entre may�sculas y min�sculas
			// http://www.w3.org/TR/selectors/#pseudo-classes
			// Priorizar por distinci�n entre may�sculas y min�sculas en caso de que se agreguen pseudos personalizados con letras may�sculas
			// Recuerda que setFilters hereda de pseudos
			var args,
				fn = Expr.pseudos [pseudo] || Expr.setFilters [pseudo.toLowerCase ()] ||
					Sizzle.error ("pseudo no admitido:" + pseudo);

			// El usuario puede usar createPseudo para indicar que
			// se necesitan argumentos para crear la funci�n de filtro
			// tal como lo hace Sizzle
			if (fn [expandir]) {
				return fn (argumento);
			}

			// Pero mant�n el soporte para firmas antiguas
			if (fn.length> 1) {
				args = [pseudo, pseudo, "", argumento];
				return Expr.setFilters.hasOwnProperty (pseudo.toLowerCase ())?
					markFunction (funci�n (semilla, coincidencias) {
						var idx,
							emparejado = fn (semilla, argumento),
							i = longitud coincidente;
						mientras yo-- ) {
							idx = indexOf (semilla, coincidente [i]);
							semilla [idx] =! (coincide con [idx] = coincidente [i]);
						}
					}):
					funci�n (elem) {
						return fn (elem, 0, args);
					};
			}

			return fn;
		}
	},

	pseudos: {

		// Pseudos potencialmente complejos
		"no": markFunction (funci�n (selector) {

			// Recorta el selector pasado para compilar
			// para evitar tratar el inicio y el final
			// espacios como combinadores
			var input = [],
				resultados = [],
				matcher = compile (selector.replace (rtrim, "$ 1"));

			return matcher [expando]?
				markFunction (funci�n (semilla, coincidencias, _context, xml) {
					var elem,
						incomparable = coincidente (semilla, nulo, xml, []),
						i = longitud de la semilla;

					// Coincide con elementos no igualados por `matcher`
					mientras yo-- ) {
						if ((elem = incomparable [i])) {
							semilla [i] =! (coincide con [i] = elem);
						}
					}
				}):
				funci�n (elem, _context, xml) {
					entrada [0] = elem;
					comparador (entrada, nulo, xml, resultados);

					// No se quede con el elemento (n�mero 299)
					entrada [0] = nulo;
					return! results.pop ();
				};
		}),

		"tiene": markFunction (funci�n (selector) {
			funci�n de retorno (elem) {
				return Sizzle (selector, elem) .length> 0;
			};
		}),

		"contiene": markFunction (funci�n (texto) {
			text = text.replace (runescape, funescape);
			funci�n de retorno (elem) {
				return (elem.textContent || getText (elem)) .indexOf (texto)> -1;
			};
		}),

		// "Si un elemento est� representado por un selector: lang ()
		// se basa �nicamente en el valor de idioma del elemento
		// siendo igual al identificador C,
		// o comenzando con el identificador C seguido inmediatamente por "-".
		// La comparaci�n de C con el valor de idioma del elemento se realiza sin distinci�n entre may�sculas y min�sculas.
		// El identificador C no tiene que ser un nombre de idioma v�lido ".
		// http://www.w3.org/TR/selectors/#lang-pseudo
		"lang": markFunction (function (lang) {

			// el valor de idioma debe ser un identificador v�lido
			if (! ridentifier.test (lang || "")) {
				Sizzle.error ("idioma no admitido:" + idioma);
			}
			lang = lang.replace (runescape, funescape) .toLowerCase ();
			funci�n de retorno (elem) {
				var elemLang;
				hacer {
					si ((elemLang = documentIsHTML?
						elem.lang:
						elem.getAttribute ("xml: lang") || elem.getAttribute ("lang"))) {

						elemLang = elemLang.toLowerCase ();
						return elemLang === lang || elemLang.indexOf (lang + "-") === 0;
					}
				} while ((elem = elem.parentNode) && elem.nodeType === 1);
				falso retorno;
			};
		}),

		// Varios
		"objetivo": funci�n (elem) {
			var hash = window.location && window.location.hash;
			devolver hash && hash.slice (1) === elem.id;
		},

		"ra�z": funci�n (elem) {
			return elem === docElem;
		},

		"foco": funci�n (elem) {
			return elem === document.activeElement &&
				(! document.hasFocus || document.hasFocus ()) &&
				!! (elem.type || elem.href || ~ elem.tabIndex);
		},

		// Propiedades booleanas
		"habilitado": createDisabledPseudo (falso),
		"deshabilitado": createDisabledPseudo (verdadero),

		"comprobado": funci�n (elem) {

			// En CSS3,: check debe devolver tanto los elementos seleccionados como los seleccionados
			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
			var nodeName = elem.nodeName.toLowerCase ();
			return (nodeName === "input" && !! elem.checked) ||
				(nodeName === "opci�n" && !! elem.selected);
		},

		"seleccionado": funci�n (elem) {

			// Acceder a esta propiedad hace que se seleccione por defecto
			// las opciones en Safari funcionan correctamente
			if (elem.parentNode) {
				// eslint-disable-next-line no-unused-expresiones
				elem.parentNode.selectedIndex;
			}

			return elem.selected === verdadero;
		},

		// Contenidos
		"vac�o": funci�n (elem) {

			// http://www.w3.org/TR/selectors/#empty-pseudo
			//: el elemento (1) o los nodos de contenido niegan el vac�o (texto: 3; cdata: 4; referencia de la entidad: 5),
			// pero no por otros (comentario: 8; instrucci�n de procesamiento: 7; etc.)
			// nodeType <6 funciona porque los atributos (2) no aparecen como hijos
			para (elem = elem.firstChild; elem; elem = elem.nextSibling) {
				if (elem.nodeType <6) {
					falso retorno;
				}
			}
			devuelve verdadero;
		},

		"padre": funci�n (elem) {
			return! Expr.pseudos ["vac�o"] (elem);
		},

		// Elementos / tipos de entrada
		"encabezado": funci�n (elem) {
			return rheader.test (elem.nodeName);
		},

		"entrada": funci�n (elem) {
			return rinputs.test (elem.nodeName);
		},

		"bot�n": funci�n (elem) {
			var name = elem.nodeName.toLowerCase ();
			return name === "input" && elem.type === "button" || nombre === "bot�n";
		},

		"texto": funci�n (elem) {
			var attr;
			return elem.nodeName.toLowerCase () === "input" &&
				elem.type === "texto" &&

				// Soporte: IE <8
				// Los nuevos valores de atributo HTML5 (p. Ej., "B�squeda") aparecen con elem.type === "texto"
				((atributo = elem.getAttribute ("tipo")) == nulo ||
					attr.toLowerCase () === "texto");
		},

		// Posici�n en la colecci�n
		"primero": createPositionalPseudo (function () {
			return [0];
		}),

		"�ltimo": createPositionalPseudo (function (_matchIndexes, length) {
			return [longitud - 1];
		}),

		"eq": createPositionalPseudo (funci�n (_matchIndexes, longitud, argumento) {
			return [argumento <0? argumento + longitud: argumento];
		}),

		"even": createPositionalPseudo (function (matchIndexes, length) {
			var i = 0;
			para (; i <longitud; i + = 2) {
				matchIndexes.push (i);
			}
			return matchIndexes;
		}),

		"impar": createPositionalPseudo (function (matchIndexes, length) {
			var i = 1;
			para (; i <longitud; i + = 2) {
				matchIndexes.push (i);
			}
			return matchIndexes;
		}),

		"lt": createPositionalPseudo (function (matchIndexes, length, argument) {
			var i = argumento <0?
				argumento + longitud:
				argumento> longitud?
					largo :
					argumento;
			para (; --i> = 0;) {
				matchIndexes.push (i);
			}
			return matchIndexes;
		}),

		"gt": createPositionalPseudo (function (matchIndexes, length, argument) {
			var i = argumento <0? argumento + longitud: argumento;
			para (; ++ i <longitud;) {
				matchIndexes.push (i);
			}
			return matchIndexes;
		})
	}
};

Expr.pseudos ["nth"] = Expr.pseudos ["eq"];

// Agregar bot�n / tipo de entrada pseudos
para (yo en {radio: verdadero, casilla de verificaci�n: verdadero, archivo: verdadero, contrase�a: verdadero, imagen: verdadero}) {
	Expr.pseudos [i] = createInputPseudo (i);
}
para (i en {enviar: verdadero, restablecer: verdadero}) {
	Expr.pseudos [i] = createButtonPseudo (i);
}

// API f�cil para crear nuevos setFilters
function setFilters () {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters ();

tokenize = Sizzle.tokenize = function (selector, parseOnly) {
	var emparejado, coincidencia, tokens, tipo,
		soFar, grupos, preFiltros,
		cached = tokenCache [selector + ""];

	si (en cach�) {
		return parseOnly? 0: cached.slice (0);
	}

	soFar = selector;
	grupos = [];
	preFilters = Expr.preFilter;

	while (soFar) {

		// Coma y primera ejecuci�n
		if (! coincidi� || (coincidencia = rcomma.exec (soFar))) {
			si (coincidencia) {

				// No consuma las comas finales como v�lidas
				soFar = soFar.slice (coincide con [0] .length) || hasta aqu�;
			}
			grupos.push ((tokens = []));
		}

		emparejado = falso;

		// Combinadores
		if ((coincidencia = rcombinators.exec (soFar))) {
			emparejado = match.shift ();
			tokens.push ({
				valor: emparejado,

				// Lanza combinadores descendientes al espacio
				tipo: coincide con [0] .replace (rtrim, "")
			});
			soFar = soFar.slice (coincidente.longitud);
		}

		// Filtros
		para (escriba Expr.filter) {
			if ((match = matchExpr [type] .exec (soFar)) && (! preFilters [type] ||
				(coincidencia = preFiltros [tipo] (coincidencia)))) {
				emparejado = match.shift ();
				tokens.push ({
					valor: emparejado,
					tipo: tipo,
					partidos: partido
				});
				soFar = soFar.slice (coincidente.longitud);
			}
		}

		si (! coincidi�) {
			rotura;
		}
	}

	// Devuelve la longitud del exceso no v�lido
	// si solo estamos analizando
	// De lo contrario, arroja un error o devuelve tokens
	return parseOnly?
		soFar.length:
		hasta aqu� ?
			Sizzle.error (selector):

			// Guarde los tokens en cach�
			tokenCache (selector, grupos) .slice (0);
};

funci�n toSelector (tokens) {
	var i = 0,
		len = tokens.length,
		selector = "";
	para (; i <len; i ++) {
		selector + = tokens [i] .value;
	}
	selector de retorno;
}

funci�n addCombinator (comparador, combinador, base) {
	var dir = combinator.dir,
		skip = combinator.next,
		clave = saltar || dir,
		checkNonElements = base && key === "parentNode",
		doneName = hecho ++;

	volver combinator.primero?

		// Verificar con el antepasado m�s cercano / elemento anterior
		funci�n (elem, contexto, xml) {
			while ((elem = elem [dir])) {
				if (elem.nodeType === 1 || checkNonElements) {
					return matcher (elem, context, xml);
				}
			}
			falso retorno;
		}:

		// Verificar con todos los elementos antepasados ??/ precedentes
		funci�n (elem, contexto, xml) {
			var oldCache, uniqueCache, outerCache,
				newCache = [dirruns, doneName];

			// No podemos establecer datos arbitrarios en nodos XML, por lo que no se benefician del almacenamiento en cach� del combinador
			si (xml) {
				while ((elem = elem [dir])) {
					if (elem.nodeType === 1 || checkNonElements) {
						if (matcher (elem, context, xml)) {
							devuelve verdadero;
						}
					}
				}
			} dem�s {
				while ((elem = elem [dir])) {
					if (elem.nodeType === 1 || checkNonElements) {
						externalCache = elem [expando] || (elem [expando] = {});

						// Soporte: IE <9 solamente
						// Defi�ndete de las attroperties clonadas (jQuery gh-1709)
						cach� �nico = cach� externo [elem.uniqueID] ||
							(ExternalCache [elem.uniqueID] = {});

						if (omitir && omitir === elem.nodeName.toLowerCase ()) {
							elem = elem [dir] || elem;
						} else if ((oldCache = uniqueCache [clave]) &&
							oldCache [0] === dirruns && oldCache [1] === doneName) {

							// Asignar a newCache para que los resultados se propaguen a los elementos anteriores
							return (newCache [2] = oldCache [2]);
						} dem�s {

							// Reutiliza newcache para que los resultados se propaguen a los elementos anteriores
							UniqueCache [clave] = newCache;

							// Una coincidencia significa que hemos terminado; un fallo significa que tenemos que seguir comprobando
							if ((newCache [2] = matcher (elem, context, xml))) {
								devuelve verdadero;
							}
						}
					}
				}
			}
			falso retorno;
		};
}

function elementMatcher (comparadores) {
	return matchers.length> 1?
		funci�n (elem, contexto, xml) {
			var i = matchers.length;
			mientras yo-- ) {
				if (! matchers [i] (elem, context, xml)) {
					falso retorno;
				}
			}
			devuelve verdadero;
		}:
		emparejadores [0];
}

function multipleContexts (selector, contextos, resultados) {
	var i = 0,
		len = contexts.length;
	para (; i <len; i ++) {
		Sizzle (selector, contextos [i], resultados);
	}
	devolver resultados;
}

funci�n condensar (incomparable, mapa, filtro, contexto, xml) {
	var elem,
		newUnmatched = [],
		i = 0,
		len = inigualable.longitud,
		mapeado = mapa! = nulo;

	para (; i <len; i ++) {
		if ((elem = incomparable [i])) {
			if (! filter || filter (elem, context, xml)) {
				newUnmatched.push (elem);
				if (mapeado) {
					map.push (i);
				}
			}
		}
	}

	return newUnmatched;
}

funci�n setMatcher (preFilter, selector, matcher, postFilter, postFinder, postSelector) {
	if (postFilter &&! postFilter [expando]) {
		postFilter = setMatcher (postFilter);
	}
	if (postFinder &&! postFinder [expando]) {
		postFinder = setMatcher (postFinder, postSelector);
	}
	return markFunction (funci�n (semilla, resultados, contexto, xml) {
		var temp, yo, elem,
			preMap = [],
			postMap = [],
			preexistente = resultados.longitud,

			// Obtener elementos iniciales de la semilla o el contexto
			elems = semilla || multipleContexts (
				selector || "*",
				context.nodeType? [contexto]: contexto,
				[]
			),

			// Prefiltro para obtener la entrada del comparador, conservando un mapa para la sincronizaci�n de los resultados de la semilla
			matcherIn = preFilter && (semilla ||! selector)?
				condensar (elems, preMap, preFilter, context, xml):
				elems,

			matcherOut = matcher?

				// Si tenemos un postFinder, o semilla filtrada, o postFilter no semilla o resultados preexistentes,
				postFinder || (semilla? preFiltro: preexistente || postFiltro)?

					// ... es necesario un procesamiento intermedio
					[]:

					// ... de lo contrario, use los resultados directamente
					resultados:
				matcherIn;

		// Encuentra coincidencias primarias
		si (comparador) {
			matcher (matcherIn, matcherOut, context, xml);
		}

		// Aplicar postFilter
		if (postFilter) {
			temp = condensar (matcherOut, postMap);
			postFilter (temp, [], context, xml);

			// Elimina la coincidencia de elementos defectuosos movi�ndolos de nuevo a matcherIn
			i = temp.length;
			mientras yo-- ) {
				if ((elem = temp [i])) {
					matcherOut [postMap [i]] =! (matcherIn [postMap [i]] = elem);
				}
			}
		}

		if (semilla) {
			if (postFinder || preFilter) {
				if (postFinder) {

					// Obtenga el matcherOut final condensando este intermedio en contextos postFinder
					temp = [];
					i = matcherOut.length;
					mientras yo-- ) {
						if ((elem = matcherOut [i])) {

							// Restaurar matcherIn ya que elem a�n no es una coincidencia final
							temp.push ((matcherIn [i] = elem));
						}
					}
					postFinder (nulo, (matcherOut = []), temp, xml);
				}

				// Mueve los elementos coincidentes de la semilla a los resultados para mantenerlos sincronizados
				i = matcherOut.length;
				mientras yo-- ) {
					si ((elem = matcherOut [i]) &&
						(temp = postFinder? indexOf (semilla, elem): preMap [i])> -1) {

						semilla [temp] =! (resultados [temp] = elem);
					}
				}
			}

		// Agregar elementos a los resultados, a trav�s de postFinder si est� definido
		} dem�s {
			matcherOut = condensar (
				matcherOut === resultados?
					matcherOut.splice (preexistente, matcherOut.length):
					matcherOut
			);
			if (postFinder) {
				postFinder (nulo, resultados, matcherOut, xml);
			} dem�s {
				push.apply (resultados, matcherOut);
			}
		}
	});
}

function matcherFromTokens (tokens) {
	var checkContext, matcher, j,
		len = tokens.length,
		leadRelative = Expr.relative [tokens [0] .type],
		impl�citoRelativo = l�derRelativo || Expr.relative [""],
		i = leadRelative? 1: 0,

		// El comparador fundamental asegura que los elementos sean accesibles desde contextos de nivel superior
		matchContext = addCombinator (funci�n (elem) {
			return elem === checkContext;
		}, impl�citoRelativo, verdadero),
		matchAnyContext = addCombinator (funci�n (elem) {
			return indexOf (checkContext, elem)> -1;
		}, impl�citoRelativo, verdadero),
		matchers = [function (elem, context, xml) {
			var ret = (! LeadRelative && (xml || context! == outsidemostContext)) || (
				(checkContext = contexto) .nodeType?
					matchContext (elem, contexto, xml):
					matchAnyContext (elem, contexto, xml));

			// Evite aferrarse al elemento (n�mero 299)
			checkContext = null;
			return ret;
		}];

	para (; i <len; i ++) {
		if ((matcher = Expr.relative [tokens [i] .type])) {
			matchers = [addCombinator (elementMatcher (matchers), matcher)];
		} dem�s {
			matcher = Expr.filter [tokens [i] .type] .apply (nulo, tokens [i] .matches);

			// Devuelve especial al ver un comparador posicional
			if (matcher [expando]) {

				// Encuentra el siguiente operador relativo (si lo hay) para un manejo adecuado
				j = ++ i;
				para (; j <len; j ++) {
					if (Expr.relative [tokens [j] .type]) {
						rotura;
					}
				}
				return setMatcher (
					i> 1 && elementMatcher (comparadores),
					i> 1 && toSelector (

					// Si el token anterior era un combinador descendiente, inserte un elemento cualquiera impl�cito `*`
					tokens
						. rebanada (0, i - 1)
						.concat ({valor: tokens [i - 2] .type === ""? "*": ""})
					) .replace (rtrim, "$ 1"),
					emparejador
					i <j && matcherFromTokens (tokens.slice (i, j)),
					j <len && matcherFromTokens ((tokens = tokens.slice (j))),
					j <len && toSelector (tokens)
				);
			}
			matchers.push (igualador);
		}
	}

	return elementMatcher (comparadores);
}

function matcherFromGroupMatchers (elementMatchers, setMatchers) {
	var bySet = setMatchers.length> 0,
		byElement = elementMatchers.length> 0,
		superMatcher = funci�n (semilla, contexto, xml, resultados, m�s externo) {
			var elem, j, matcher,
				matchedCount = 0,
				i = "0",
				inigualable = semilla && [],
				setMatched = [],
				contextBackup = outermostContext,

				// Siempre debemos tener elementos semilla o contexto m�s externo
				elems = semilla || byElement && Expr.find ["TAG"] ("*", m�s externo),

				// Usa dirruns enteros si este es el comparador m�s externo
				dirrunsUnique = (dirruns + = contextBackup == null? 1: Math.random () || 0.1),
				len = elems.length;

			if (m�s externo) {

				// Soporte: IE 11+, Edge 17 - 18+
				// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
				// dos documentos; las comparaciones superficiales funcionan.
				// eslint-disable-next-line eqeqeq
				externalmostContext = contexto == documento || contexto || m�s exterior;
			}

			// Agrega elementos pasando elementMatchers directamente a los resultados
			// Soporte: IE <9, Safari
			// Tolerar las propiedades de NodeList (IE: "length"; Safari: <number>) elementos coincidentes por id
			para (; i! == len && (elem = elems [i])! = null; i ++) {
				if (byElement && elem) {
					j = 0;

					// Soporte: IE 11+, Edge 17 - 18+
					// IE / Edge a veces arroja un error de "Permiso denegado" al realizar una comparaci�n estricta
					// dos documentos; las comparaciones superficiales funcionan.
					// eslint-disable-next-line eqeqeq
					if (! context && elem.ownerDocument! = document) {
						setDocument (elem);
						xml =! documentIsHTML;
					}
					while ((matcher = elementMatchers [j ++])) {
						if (comparador (elem, contexto || documento, xml)) {
							results.push (elem);
							rotura;
						}
					}
					if (m�s externo) {
						dirruns = dirrunsUnique;
					}
				}

				// Seguimiento de elementos no coincidentes para establecer filtros
				if (bySet) {

					// Habr�n pasado por todos los emparejamientos posibles
					if ((elem =! matcher && elem)) {
						matchedCount--;
					}

					// Alarga la matriz para cada elemento, coincidente o no
					if (semilla) {
						inigualable.push (elem);
					}
				}
			}

			// `i` es ahora el recuento de elementos visitados anteriormente y lo agrega a` matchedCount`
			// hace que este �ltimo no sea negativo.
			MatchedCount + = i;

			// Aplicar filtros de conjunto a elementos no coincidentes
			// NOTA: Esto se puede omitir si no hay elementos no coincidentes (es decir, `matchedCount`
			// es igual a `i`), a menos que no hayamos visitado _cualquier_ elementos en el ciclo anterior porque tenemos
			// sin coincidencias de elementos y sin semilla.
			// Incrementar una cadena inicial "0" `i` permite que` i` siga siendo una cadena solo en ese
			// caso, que dar� como resultado un "00" `matchedCount` que difiere de` i` pero tambi�n es
			// num�ricamente cero.
			if (bySet && i! == matchedCount) {
				j = 0;
				while ((matcher = setMatchers [j ++])) {
					comparador (inigualable, setMatched, context, xml);
				}

				if (semilla) {

					// Reintegrar coincidencias de elementos para eliminar la necesidad de ordenar
					if (matchedCount> 0) {
						mientras yo-- ) {
							if (! (inigualable [i] || setMatched [i])) {
								setMatched [i] = pop.call (resultados);
							}
						}
					}

					// Descartar los valores del marcador de posici�n del �ndice para obtener solo coincidencias reales
					setMatched = condensar (setMatched);
				}

				// Agregar coincidencias a los resultados
				push.apply (resultados, setMatched);

				// Las coincidencias de conjuntos sin semillas que tienen �xito en varios emparejadores exitosos estipulan la clasificaci�n
				if (m�s externo &&! seed && setMatched.length> 0 &&
					(matchedCount + setMatchers.length)> 1) {

					Sizzle.uniqueSort (resultados);
				}
			}

			// Anular la manipulaci�n de globales por comparadores anidados
			if (m�s externo) {
				dirruns = dirrunsUnique;
				externalmostContext = contextBackup;
			}

			regreso inigualable;
		};

	volver porSet?
		markFunction (superMatcher):
		superMatcher;
}

compile = Sizzle.compile = function (selector, match / * Internal Use Only * /) {
	var i,
		setMatchers = [],
		elementMatchers = [],
		cached = compilerCache [selector + ""];

	if (! cach�) {

		// Genera una funci�n de funciones recursivas que se pueden usar para verificar cada elemento
		if (! match) {
			coincidencia = tokenizar (selector);
		}
		i = coincidencia.longitud;
		mientras yo-- ) {
			cached = matcherFromTokens (coincide con [i]);
			if (en cach� [expando]) {
				setMatchers.push (en cach�);
			} dem�s {
				elementMatchers.push (en cach�);
			}
		}

		// Almacene en cach� la funci�n compilada
		cached = compilerCache (
			selector,
			matcherFromGroupMatchers (elementMatchers, setMatchers)
		);

		// Guardar selector y tokenizaci�n
		cached.selector = selector;
	}
	retorno en cach�;
};

/ **
 * Una funci�n de selecci�n de bajo nivel que funciona con compilado de Sizzle
 * funciones de selector
 * @param {String | Function} selector Un selector o un precompilado
 * funci�n de selector construida con Sizzle.compile
 * @param {Element} contexto
 * @param {Array} [resultados]
 * @param {Array} [semilla] Un conjunto de elementos para comparar
 * /
select = Sizzle.select = function (selector, contexto, resultados, semilla) {
	var i, tokens, token, tipo, buscar,
		compilado = tipo de selector === "funci�n" && selector,
		match =! seed && tokenize ((selector = compiled.selector || selector));

	resultados = resultados || [];

	// Intente minimizar las operaciones si solo hay un selector en la lista y no hay semilla
	// (el �ltimo de los cuales nos garantiza contexto)
	if (match.length === 1) {

		// Reducir el contexto si el selector compuesto principal es un ID
		tokens = coincidir [0] = coincidir [0] .slice (0);
		if (tokens.length> 2 && (token = tokens [0]) .type === "ID" &&
			context.nodeType === 9 && documentIsHTML && Expr.relative [tokens [1] .type]) {

			context = (Expr.find ["ID"] (token.matches [0]
				.replace (runescape, funescape), contexto) || []) [0];
			if (! context) {
				devolver resultados;

			// Los comparadores precompilados seguir�n verificando la ascendencia, as� que suba de nivel
			} else if (compilado) {
				context = context.parentNode;
			}

			selector = selector.slice (tokens.shift (). value.length);
		}

		// Obtener un conjunto de semillas para la coincidencia de derecha a izquierda
		i = matchExpr ["needsContext"] .test (selector)? 0: tokens.length;
		mientras yo-- ) {
			token = tokens [i];

			// Abortar si golpeamos un combinador
			if (Expr.relative [(type = token.type)]) {
				rotura;
			}
			if ((buscar = Expr.find [tipo])) {

				// B�squeda, ampliando el contexto para los principales combinadores de hermanos
				si ((semilla = encontrar (
					token.matches [0] .replace (runescape, funescape),
					rsibling.test (tokens [0] .type) && testContext (context.parentNode) ||
						contexto
				))) {

					// Si la semilla est� vac�a o no quedan tokens, podemos regresar antes
					tokens.splice (i, 1);
					selector = seed.length && toSelector (tokens);
					if (! selector) {
						push.apply (resultados, semilla);
						devolver resultados;
					}

					rotura;
				}
			}
		}
	}

	// Compila y ejecuta una funci�n de filtrado si no se proporciona una
	// Proporcione `match` para evitar la retoquenizaci�n si modificamos el selector de arriba
	(compilado || compilar (selector, emparejar)) (
		semilla,
		contexto,
		! documentIsHTML,
		resultados
		! contexto || rsibling.test (selector) && testContext (context.parentNode) || contexto
	);
	devolver resultados;
};

// Asignaciones �nicas

// Clasificar estabilidad
support.sortStable = expando.split ("") .sort (sortOrder) .join ("") === expandir;

// Soporte: Chrome 14-35 +
// Asume siempre duplicados si no se pasan a la funci�n de comparaci�n
support.detectDuplicates = !! hasDuplicate;

// Inicializar con el documento predeterminado
setDocument ();

// Soporte: Webkit <537.32 - Safari 6.0.3 / Chrome 25 (corregido en Chrome 27)
// Los nodos separados se siguen * de manera confusa * entre s� *
support.sortDetached = assert (function (el) {

	// Deber�a devolver 1, pero devuelve 4 (siguiente)
	return el.compareDocumentPosition (document.createElement ("conjunto de campos")) & 1;
});

// Soporte: IE <8
// Evita la "interpolaci�n" de atributos / propiedades
// https://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if (! assert (function (el) {
	el.innerHTML = "<a href='#'> </a>";
	return el.firstChild.getAttribute ("href") === "#";
})) {
	addHandle ("tipo | href | altura | ancho", funci�n (elem, nombre, isXML) {
		if (! isXML) {
			return elem.getAttribute (nombre, nombre.toLowerCase () === "tipo"? 1: 2);
		}
	});
}

// Soporte: IE <9
// Usa defaultValue en lugar de getAttribute ("valor")
if (! support.attributes ||! assert (function (el) {
	el.innerHTML = "<entrada />";
	el.firstChild.setAttribute ("valor", "");
	return el.firstChild.getAttribute ("valor") === "";
})) {
	addHandle ("valor", funci�n (elem, _name, isXML) {
		if (! isXML && elem.nodeName.toLowerCase () === "input") {
			return elem.defaultValue;
		}
	});
}

// Soporte: IE <9
// Usa getAttributeNode para buscar booleanos cuando getAttribute miente
if (! assert (function (el) {
	return el.getAttribute ("deshabilitado") == null;
})) {
	addHandle (booleanos, funci�n (elem, nombre, isXML) {
		var val;
		if (! isXML) {
			return elem [nombre] === verdadero? name.toLowerCase ():
				(val = elem.getAttributeNode (nombre)) && val.specified?
					val.value:
					nulo;
		}
	});
}

devuelve Sizzle;

} )( ventana );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;

// Obsoleto
jQuery.expr [":"] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;
jQuery.escapeSelector = Sizzle.escape;




var dir = funci�n (elem, dir, hasta) {
	var coincidi� = [],
		truncar = hasta! == indefinido;

	while ((elem = elem [dir]) && elem.nodeType! == 9) {
		if (elem.nodeType === 1) {
			if (truncar && jQuery (elem) .is (hasta)) {
				rotura;
			}
			emparejado.push (elem);
		}
	}
	retorno igualado;
};


var hermanos = funci�n (n, elem) {
	var emparejado = [];

	para (; n; n = n. Hermano siguiente) {
		if (n.nodeType === 1 && n! == elem) {
			emparejado.push (n);
		}
	}

	retorno igualado;
};


var rneedsContext = jQuery.expr.match.needsContext;



function nodeName (elem, nombre) {

	return elem.nodeName && elem.nodeName.toLowerCase () === nombre.toLowerCase ();

}
var rsingleTag = (/ ^ <([az] [^ \ / \ 0>: \ x20 \ t \ r \ n \ f] *) [\ x20 \ t \ r \ n \ f] * \ /?> ( ?: <\ / \ 1> |) $ / i);



// Implementar la misma funcionalidad para filtrar y no
funci�n aventar (elementos, calificador, no) {
	if (isFunction (calificador)) {
		return jQuery.grep (elementos, funci�n (elem, i) {
			return !! qualifier.call (elem, i, elem)! == not;
		});
	}

	// Elemento �nico
	if (qualifier.nodeType) {
		return jQuery.grep (elementos, funci�n (elem) {
			return (elem === calificador)! == no;
		});
	}

	// Arraylike de elementos (jQuery, argumentos, Array)
	if (typeof qualifier! == "string") {
		return jQuery.grep (elementos, funci�n (elem) {
			return (indexOf.call (calificador, elem)> -1)! == no;
		});
	}

	// Filtrado directamente para selectores simples y complejos
	return jQuery.filter (calificador, elementos, no);
}

jQuery.filter = function (expr, elems, not) {
	var elem = elems [0];

	si no ) {
		expr = ": no (" + expr + ")";
	}

	if (elems.length === 1 && elem.nodeType === 1) {
		return jQuery.find.matchesSelector (elem, expr)? [elem]: [];
	}

	return jQuery.find.matches (expr, jQuery.grep (elems, function (elem) {
		return elem.nodeType === 1;
	}));
};

jQuery.fn.extend ({
	encontrar: funci�n (selector) {
		var i, ret,
			len = this.length,
			self = esto;

		if (typeof selector! == "string") {
			devuelve this.pushStack (jQuery (selector) .filter (function () {
				para (i = 0; i <len; i ++) {
					if (jQuery.contains (self [i], this)) {
						devuelve verdadero;
					}
				}
			}));
		}

		ret = this.pushStack ([]);

		para (i = 0; i <len; i ++) {
			jQuery.find (selector, self [i], ret);
		}

		return len> 1? jQuery.uniqueSort (ret): ret;
	},
	filtro: funci�n (selector) {
		return this.pushStack (aventar (esto, selector || [], falso));
	},
	no: funci�n (selector) {
		return this.pushStack (aventar (esto, selector || [], verdadero));
	},
	es: funci�n (selector) {
		volver !! aventar
			esto,

			// Si este es un selector posicional / relativo, verifique la pertenencia al conjunto devuelto
			// entonces $ ("p: first"). is ("p: last") no devolver� verdadero para un documento con dos "p".
			typeof selector === "cadena" && rneedsContext.test (selector)?
				jQuery (selector):
				selector || [],
			falso
		).largo;
	}
});


// Inicializar un objeto jQuery


// Una referencia central a la ra�z jQuery (documento)
var rootjQuery,

	// Una forma sencilla de comprobar cadenas HTML
	// Priorice #id sobre <tag> para evitar XSS a trav�s de location.hash (# 9521)
	// Reconocimiento estricto de HTML (# 11290: debe comenzar con <)
	// Atajo simple #id case para velocidad
	rquickExpr = / ^ (?: \ s * (<[\ w \ W] +>) [^>] * | # ([\ w -] +)) $ /,

	init = jQuery.fn.init = funci�n (selector, contexto, ra�z) {
		var match, elem;

		// MANEJO: $ (""), $ (nulo), $ (indefinido), $ (falso)
		if (! selector) {
			devuelve esto;
		}

		// El m�todo init () acepta un rootjQuery alternativo
		// para que la migraci�n admita jQuery.sub (gh-2101)
		root = root || rootjQuery;

		// Manejar cadenas HTML
		if (typeof selector === "string") {
			if (selector [0] === "<" &&
				selector [selector.length - 1] === ">" &&
				selector.length> = 3) {

				// Suponga que las cadenas que comienzan y terminan con <> son HTML y omita la verificaci�n de expresiones regulares
				coincidencia = [nulo, selector, nulo];

			} dem�s {
				coincidencia = rquickExpr.exec (selector);
			}

			// Coincide con html o aseg�rese de que no se especifique ning�n contexto para #id
			if (coincide con && (coincide con [1] ||! contexto)) {

				// MANEJO: $ (html) -> $ (matriz)
				si (coincide con [1]) {
					context = instancia de contexto de jQuery? contexto [0]: contexto;

					// La opci�n para ejecutar scripts es verdadera para retrocompatibilidad
					// Deje que se lance el error intencionalmente si parseHTML no est� presente
					jQuery.merge (esto, jQuery.parseHTML (
						coincidir [1],
						context && context.nodeType? context.ownerDocument || contexto: documento,
						cierto
					));

					// MANEJO: $ (html, props)
					if (rsingleTag.test (coincide con [1]) && jQuery.isPlainObject (contexto)) {
						para (coincidencia en contexto) {

							// Las propiedades del contexto se llaman como m�todos si es posible
							if (isFunction (este [partido])) {
								este [partido] (contexto [partido]);

							// ... y de lo contrario establecer como atributos
							} dem�s {
								this.attr (coincidencia, contexto [coincidencia]);
							}
						}
					}

					devuelve esto;

				// MANIJA: $ (# id)
				} dem�s {
					elem = document.getElementById (coincide con [2]);

					si (elem) {

						// Inyecta el elemento directamente en el objeto jQuery
						esto [0] = elem;
						this.length = 1;
					}
					devuelve esto;
				}

			// MANEJO: $ (expr, $ (...))
			} else if (! context || context.jquery) {
				return (contexto || ra�z) .find (selector);

			// MANEJO: $ (expr, contexto)
			// (que es equivalente a: $ (contexto) .find (expr)
			} dem�s {
				devuelve este.constructor (contexto) .find (selector);
			}

		// MANIJA: $ (DOMElement)
		} else if (selector.nodeType) {
			este [0] = selector;
			this.length = 1;
			devuelve esto;

		// MANIJA: $ (funci�n)
		// Atajo para documento listo
		} else if (isFunction (selector)) {
			return root.ready! == undefined?
				root.ready (selector):

				// Ejecutar inmediatamente si listo no est� presente
				selector (jQuery);
		}

		return jQuery.makeArray (selector, esto);
	};

// Dale a la funci�n init el prototipo de jQuery para una instanciaci�n posterior
init.prototype = jQuery.fn;

// Inicializar la referencia central
rootjQuery = jQuery (documento);


var rparentsprev = / ^ (?: padres | anterior (?: Hasta | Todos)) /,

	// M�todos garantizados para producir un conjunto �nico cuando se parte de un conjunto �nico
	GuaranteUnique = {
		ni�os: cierto,
		contenido: verdadero,
		siguiente: cierto,
		prev: cierto
	};

jQuery.fn.extend ({
	tiene: funci�n (objetivo) {
		var objetivos = jQuery (objetivo, esto),
			l = objetivos.longitud;

		devuelve this.filter (function () {
			var i = 0;
			para (; i <l; i ++) {
				if (jQuery.contains (this, objetivos [i])) {
					devuelve verdadero;
				}
			}
		});
	},

	m�s cercano: funci�n (selectores, contexto) {
		var cur,
			i = 0,
			l = esta.longitud,
			coincidente = [],
			objetivos = tipo de selectores! == "cadena" && jQuery (selectores);

		// Los selectores posicionales nunca coinciden, ya que no hay contexto _selection_
		if (! rneedsContext.test (selectores)) {
			para (; i <l; i ++) {
				para (cur = this [i]; cur && cur! == context; cur = cur.parentNode) {

					// Omitir siempre fragmentos de documentos
					if (cur.nodeType <11 && (objetivos?
						target.index (cur)> -1:

						// No le pase elementos no deseados a Sizzle
						cur.nodeType === 1 &&
							jQuery.find.matchesSelector (cur, selectores))) {

						emparejado.push (cur);
						rotura;
					}
				}
			}
		}

		return this.pushStack (coincidente.longitud> 1? jQuery.uniqueSort (coincidente): coincidente);
	},

	// Determinar la posici�n de un elemento dentro del conjunto
	�ndice: funci�n (elem) {

		// Sin argumento, �ndice de retorno en padre
		si (! elem) {
			return (este [0] && este [0] .parentNode)? this.first (). prevAll (). length: -1;
		}

		// �ndice en el selector
		if (typeof elem === "cadena") {
			return indexOf.call (jQuery (elem), this [0]);
		}

		// Localiza la posici�n del elemento deseado
		return indexOf.call (esto,

			// Si recibe un objeto jQuery, se usa el primer elemento
			elem.jquery? elem [0]: elem
		);
	},

	agregar: funci�n (selector, contexto) {
		devuelve this.pushStack (
			jQuery.uniqueSort (
				jQuery.merge (this.get (), jQuery (selector, contexto))
			)
		);
	},

	addBack: function (selector) {
		devolver this.add (selector == null?
			this.prevObject: this.prevObject.filter (selector)
		);
	}
});

funci�n hermano (cur, dir) {
	while ((cur = cur [dir]) && cur.nodeType! == 1) {}
	return cur;
}

jQuery.each ({
	padre: funci�n (elem) {
		var parent = elem.parentNode;
		return parent && parent.nodeType! == 11? padre: nulo;
	},
	padres: funci�n (elem) {
		return dir (elem, "parentNode");
	},
	padresHasta: funci�n (elem, _i, hasta) {
		return dir (elem, "parentNode", hasta);
	},
	siguiente: funci�n (elem) {
		return hermano (elem, "nextSibling");
	},
	prev: function (elem) {
		return hermano (elem, "hermano anterior");
	},
	nextAll: function (elem) {
		return dir (elem, "nextSibling");
	},
	prevAll: function (elem) {
		return dir (elem, "hermano anterior");
	},
	nextUntil: function (elem, _i, until) {
		return dir (elem, "nextSibling", hasta);
	},
	prevUntil: function (elem, _i, until) {
		return dir (elem, "hermano anterior", hasta);
	},
	hermanos: funci�n (elem) {
		devolver hermanos ((elem.parentNode || {}) .firstChild, elem);
	},
	hijos: funci�n (elem) {
		hermanos de retorno (elem.firstChild);
	},
	contenido: function (elem) {
		if (elem.contentDocument! = null &&

			// Soporte: IE 11+
			// Los elementos <object> sin atributo `data` tienen un objeto
			// `contentDocument` con un prototipo` null`.
			getProto (elem.contentDocument)) {

			return elem.contentDocument;
		}

		// Soporte: solo IE 9-11, solo iOS 7, navegador Android <= 4.3 solo
		// Trate el elemento de la plantilla como uno normal en los navegadores que
		// no lo soportas.
		if (nodeName (elem, "plantilla")) {
			elem = elem.content || elem;
		}

		return jQuery.merge ([], elem.childNodes);
	}
}, funci�n (nombre, fn) {
	jQuery.fn [nombre] = funci�n (hasta, selector) {
		var emparejado = jQuery.map (esto, fn, hasta);

		if (name.slice (-5)! == "Hasta") {
			selector = hasta;
		}

		if (selector && typeof selector === "cadena") {
			emparejado = jQuery.filter (selector, emparejado);
		}

		if (this.length> 1) {

			// Eliminar duplicados
			if (! GuaranteUnique [nombre]) {
				jQuery.uniqueSort (coincidente);
			}

			// Orden inverso para padres * y prev-derivados
			if (rparentsprev.test (nombre)) {
				emparejado.reverse ();
			}
		}

		return this.pushStack (emparejado);
	};
});
var rnothtmlwhite = (/ [^ \ x20 \ t \ r \ n \ f] + / g);



// Convertir opciones con formato de cadena en opciones con formato de objeto
function createOptions (opciones) {
	var object = {};
	jQuery.each (options.match (rnothtmlwhite) || [], function (_, flag) {
		objeto [bandera] = verdadero;
	});
	devolver objeto;
}

/ *
 * Cree una lista de devoluci�n de llamada utilizando los siguientes par�metros:
 *
 * opciones: una lista opcional de opciones separadas por espacios que cambiar�n c�mo
 * la lista de devoluci�n de llamada se comporta o un objeto de opci�n m�s tradicional
 *
 * De forma predeterminada, una lista de devoluci�n de llamada actuar� como una lista de devoluci�n de llamada de evento y se puede
 * "disparado" varias veces.
 *
 * Posibles opciones:
 *
 * una vez: asegurar� que la lista de devoluci�n de llamada solo se pueda activar una vez (como un aplazado)
 *
 * memoria: realizar� un seguimiento de los valores anteriores y llamar� a cualquier devoluci�n de llamada agregada
 * despu�s de que la lista se haya disparado de inmediato con el �ltimo "memorizado"
 * valores (como un diferido)
 *
 * �nico: asegurar� que una devoluci�n de llamada solo se pueda agregar una vez (sin duplicar en la lista)
 *
 * stopOnFalse: interrumpe las llamadas cuando una devoluci�n de llamada devuelve falso
 *
 * /
jQuery.Callbacks = function (opciones) {

	// Convierta las opciones de formato de cadena a formato de objeto si es necesario
	// (primero comprobamos el cach�)
	opciones = tipo de opciones === "cadena"?
		createOptions (opciones):
		jQuery.extend ({}, opciones);

	var // Marcar para saber si la lista se est� activando actualmente
		disparo,

		// �ltimo valor de disparo para listas no olvidables
		memoria,

		// Marcar para saber si la lista ya se dispar�
		encendido,

		// Bandera para evitar disparos
		bloqueado

		// Lista de devoluci�n de llamada real
		lista = [],

		// Cola de datos de ejecuci�n para listas repetibles
		cola = [],

		// �ndice de devoluci�n de llamada que se est� activando actualmente (modificado por agregar / eliminar seg�n sea necesario)
		firingIndex = -1,

		// Devolver llamadas de fuego
		fuego = funci�n () {

			// Hacer cumplir el disparo �nico
			bloqueado = bloqueado || options.once;

			// Ejecutar devoluciones de llamada para todas las ejecuciones pendientes,
			// respetar las anulaciones de firingIndex y los cambios de tiempo de ejecuci�n
			disparado = disparando = verdadero;
			para (; queue.length; firingIndex = -1) {
				memoria = cola.shift ();
				while (++ firingIndex <list.length) {

					// Ejecute la devoluci�n de llamada y verifique la terminaci�n anticipada
					if (list [firingIndex] .apply (memoria [0], memoria [1]) === falso &&
						options.stopOnFalse) {

						// Salta al final y olvida los datos para que .add no se vuelva a disparar
						firingIndex = list.length;
						memoria = falso;
					}
				}
			}

			// Olvida los datos si hemos terminado con ellos
			if (! options.memory) {
				memoria = falso;
			}

			disparo = falso;

			// Limpia si hemos terminado de disparar para siempre
			si (bloqueado) {

				// Mantener una lista vac�a si tenemos datos para futuras llamadas de adici�n
				si (memoria) {
					lista = [];

				// De lo contrario, este objeto se gasta
				} dem�s {
					lista = "";
				}
			}
		},

		// Objeto de devoluciones de llamada reales
		self = {

			// Agrega una devoluci�n de llamada o una colecci�n de devoluciones de llamada a la lista
			agregar: funci�n () {
				if (lista) {

					// Si tenemos memoria de una ejecuci�n pasada, deber�amos disparar despu�s de agregar
					if (memoria &&! disparando) {
						firingIndex = list.length - 1;
						queue.push (memoria);
					}

					(funci�n agregar (args) {
						jQuery.each (argumentos, funci�n (_, arg) {
							if (isFunction (arg)) {
								if (! options.unique ||! self.has (arg)) {
									list.push (arg);
								}
							} else if (arg && arg.length && toType (arg)! == "cadena") {

								// Inspeccionar de forma recursiva
								agregar (arg);
							}
						});
					}) (argumentos);

					if (memoria &&! disparando) {
						fuego();
					}
				}
				devuelve esto;
			},

			// Eliminar una devoluci�n de llamada de la lista
			eliminar: funci�n () {
				jQuery.each (argumentos, funci�n (_, arg) {
					var index;
					while ((�ndice = jQuery.inArray (arg, lista, �ndice))> -1) {
						list.splice (�ndice, 1);

						// Manejar �ndices de disparo
						if (�ndice <= firingIndex) {
							firingIndex--;
						}
					}
				});
				devuelve esto;
			},

			// Comprueba si una devoluci�n de llamada determinada est� en la lista.
			// Si no se proporciona ning�n argumento, devuelve si la lista tiene devoluciones de llamada adjuntas.
			tiene: funci�n (fn) {
				volver fn?
					jQuery.inArray (fn, lista)> -1:
					list.length> 0;
			},

			// Eliminar todas las devoluciones de llamada de la lista
			vac�o: funci�n () {
				if (lista) {
					lista = [];
				}
				devuelve esto;
			},

			// Deshabilitar .fire y .add
			// Abortar cualquier ejecuci�n actual / pendiente
			// Borrar todas las devoluciones de llamada y valores
			inhabilitar: funci�n () {
				bloqueado = cola = [];
				lista = memoria = "";
				devuelve esto;
			},
			inhabilitado: funci�n () {
				volver! lista;
			},

			// Deshabilitar .fire
			// Tambi�n deshabilitar .add a menos que tengamos memoria (ya que no tendr�a ning�n efecto)
			// Abortar las ejecuciones pendientes
			bloqueo: funci�n () {
				bloqueado = cola = [];
				if (! memory &&! disparando) {
					lista = memoria = "";
				}
				devuelve esto;
			},
			bloqueado: funci�n () {
				volver !! bloqueado;
			},

			// Llamar a todas las devoluciones de llamada con el contexto y los argumentos dados
			fireWith: function (context, args) {
				si (! bloqueado) {
					argumentos = argumentos || [];
					args = [contexto, args.slice? args.slice (): args];
					queue.push (argumentos);
					si (! disparando) {
						fuego();
					}
				}
				devuelve esto;
			},

			// Llama a todas las devoluciones de llamada con los argumentos dados
			fuego: funci�n () {
				self.fireWith (esto, argumentos);
				devuelve esto;
			},

			// Para saber si las devoluciones de llamada ya se han llamado al menos una vez
			despedido: function () {
				volver !! despedido;
			}
		};

	volver a s� mismo
};


funci�n Identidad (v) {
	return v;
}
funci�n Thrower (ex) {
	tirar ex;
}

function adoptValue (valor, resolver, rechazar, noValue) {
	m�todo var;

	intentar {

		// Verifique primero el aspecto de la promesa para privilegiar el comportamiento sincr�nico
		if (value && isFunction ((method = value.promise))) {
			method.call (valor) .done (resolver) .fail (rechazar);

		// Otras thenables
		} else if (valor && isFunction ((m�todo = valor.entonces))) {
			method.call (valorar, resolver, rechazar);

		// Otros non-thenables
		} dem�s {

			// Controla los argumentos de `resolve` dejando que Array # slice convierta el booleano` noValue` en un entero:
			// * falso: [valor] .slice (0) => resolver (valor)
			// * verdadero: [valor] .slice (1) => resolver ()
			resolve.apply (undefined, [value] .slice (noValue));
		}

	// Para Promesas / A +, convierta las excepciones en rechazos
	// Dado que jQuery.when no desenvuelve las habilitaciones, podemos omitir las comprobaciones adicionales que aparecen en
	// Diferido # luego para suprimir condicionalmente el rechazo.
	} captura (valor) {

		// Soporte: solo Android 4.0
		// Funciones de modo estricto invocadas sin .call / .apply obtienen contexto de objeto global
		rechazar.aplicar (indefinido, [valor]);
	}
}

jQuery.extend ({

	Diferido: funci�n (func) {
		var tuplas = [

				// acci�n, agregar escucha, devoluciones de llamada,
				// ... luego manejadores, �ndice de argumento, [estado final]
				["notificar", "progreso", jQuery.Callbacks ("memoria"),
					jQuery.Callbacks ("memoria"), 2],
				["resolver", "hecho", jQuery.Callbacks ("memoria una vez"),
					jQuery.Callbacks ("una vez memoria"), 0, "resuelto"],
				["rechazar", "fallar", jQuery.Callbacks ("memoria una vez"),
					jQuery.Callbacks ("una vez memoria"), 1, "rechazado"]
			],
			estado = "pendiente",
			promesa = {
				funci�n estatal() {
					estado de retorno;
				},
				siempre: funci�n () {
					diferido.done (argumentos) .fail (argumentos);
					devuelve esto;
				},
				"captura": funci�n (fn) {
					devolver promesa, entonces (nulo, fn);
				},

				// Mantener la tuber�a para retrocompatibilidad
				pipe: function (/ * fnDone, fnFail, fnProgress * /) {
					var fns = argumentos;

					return jQuery.Deferred (function (newDefer) {
						jQuery.each (tuplas, funci�n (_i, tupla) {

							// Mapear tuplas (progreso, hecho, fallar) a argumentos (hecho, fallar, progreso)
							var fn = isFunction (fns [tupla [4]]) && fns [tupla [4]];

							// deferred.progress (function () {enlazar con newDefer o newDefer.notify})
							// diferido.done (funci�n () {enlazar a newDefer o newDefer.resolve})
							// deferred.fail (function () {enlazar a newDefer o newDefer.reject})
							diferido [tupla [1]] (funci�n () {
								var devuelto = fn && fn.apply (esto, argumentos);
								if (devuelto && isFunction (devuelto.promesa)) {
									devuelto.promise ()
										.progreso (newDefer.notify)
										.done (newDefer.resolve)
										.fail (newDefer.reject);
								} dem�s {
									newDefer [tupla [0] + "Con"] (
										esto,
										fn? [devuelto]: argumentos
									);
								}
							});
						});
						fns = nulo;
					} ).promesa();
				},
				luego: funci�n (onFuldered, onRejected, onProgress) {
					var maxDepth = 0;
					funci�n resolver (profundidad, diferido, controlador, especial) {
						funci�n de retorno () {
							var that = this,
								args = argumentos,
								mightThrow = function () {
									var regres�, entonces;

									// Soporte: Promesas / A + secci�n 2.3.3.3.3
									// https://promisesaplus.com/#point-59
									// Ignorar los intentos de doble resoluci�n
									if (profundidad <maxDepth) {
										regreso;
									}

									devuelto = manejador.apply (eso, argumentos);

									// Soporte: Promesas / A + secci�n 2.3.1
									// https://promisesaplus.com/#point-48
									if (devuelto === deferred.promise ()) {
										lanzar nuevo TypeError ("Auto-resoluci�n Thenable");
									}

									// Soporte: Promesas / A + secciones 2.3.3.1, 3.5
									// https://promisesaplus.com/#point-54
									// https://promisesaplus.com/#point-75
									// Recuperar `entonces` solo una vez
									luego = devuelto &&

										// Soporte: Promesas / A + secci�n 2.3.4
										// https://promisesaplus.com/#point-64
										// Verifique solo objetos y funciones para determinar la posibilidad
										(typeof devuelto === "objeto" ||
											typeof devuelto === "funci�n") &&
										regres�.entonces;

									// Manejar un thenable devuelto
									if (isFunction (entonces)) {

										// Procesadores especiales (notificar) solo espere la resoluci�n
										if (especial) {
											luego llame(
												regres�
												resolver (maxDepth, diferido, Identidad, especial),
												resolver (maxDepth, diferido, lanzador, especial)
											);

										// Los procesadores normales (resolver) tambi�n se conectan al progreso
										} dem�s {

											// ... e ignore los valores de resoluci�n m�s antiguos
											maxDepth ++;

											luego llame(
												regres�
												resolver (maxDepth, diferido, Identidad, especial),
												resolver (maxDepth, diferido, lanzador, especial),
												resolver (maxDepth, diferido, identidad,
													diferido.notifyWith)
											);
										}

									// Maneja todos los dem�s valores devueltos
									} dem�s {

										// Solo los manejadores sustitutos transmiten contexto
										// y varios valores (comportamiento sin especificaciones)
										if (controlador! == Identidad) {
											eso = indefinido;
											args = [devuelto];
										}

										// Procesar los valores
										// El proceso predeterminado es resolver
										(especial || diferido.resolveWith) (eso, argumentos);
									}
								},

								// Solo los procesadores normales (resuelven) detectan y rechazan excepciones
								proceso = especial?
									mightThrow:
									function () {
										intentar {
											mightThrow ();
										} captura (e) {

											if (jQuery.Deferred.exceptionHook) {
												jQuery.Deferred.exceptionHook (e,
													process.stackTrace);
											}

											// Soporte: Promesas / A + secci�n 2.3.3.3.4.1
											// https://promisesaplus.com/#point-61
											// Ignorar las excepciones posteriores a la resoluci�n
											if (profundidad + 1> = maxDepth) {

												// Solo los manejadores sustitutos transmiten contexto
												// y varios valores (comportamiento sin especificaciones)
												if (manejador! == Lanzador) {
													eso = indefinido;
													args = [e];
												}

												deferred.rejectWith (eso, argumentos);
											}
										}
									};

							// Soporte: Promesas / A + secci�n 2.3.3.3.1
							// https://promisesaplus.com/#point-57
							// Resolver las promesas inmediatamente para esquivar el falso rechazo de
							// errores posteriores
							if (profundidad) {
								proceso();
							} dem�s {

								// Llamar a un gancho opcional para registrar la pila, en caso de excepci�n
								// ya que de lo contrario se pierde cuando la ejecuci�n se vuelve as�ncrona
								if (jQuery.Deferred.getStackHook) {
									process.stackTrace = jQuery.Deferred.getStackHook ();
								}
								window.setTimeout (proceso);
							}
						};
					}

					return jQuery.Deferred (function (newDefer) {

						// progress_handlers.add (...)
						tuplas [0] [3] .add (
							resolver(
								0,
								newDefer,
								isFunction (onProgress)?
									en progreso :
									Identidad,
								newDefer.notifyWith
							)
						);

						// manipuladores_cumplidos.add (...)
						tuplas [1] [3] .add (
							resolver(
								0,
								newDefer,
								isFunction (onFuldered)?
									en Cumplido:
									Identidad
							)
						);

						// manipuladores_rechazados.add (...)
						tuplas [2] [3] .add (
							resolver(
								0,
								newDefer,
								isFunction (onRejected)?
									onRejected:
									Lanzador
							)
						);
					} ).promesa();
				},

				// Obtenga una promesa para este diferido
				// Si se proporciona obj, el aspecto de promesa se agrega al objeto
				promesa: funci�n (obj) {
					return obj! = null? jQuery.extend (obj, promesa): promesa;
				}
			},
			diferido = {};

		// Agregar m�todos espec�ficos de la lista
		jQuery.each (tuplas, funci�n (i, tupla) {
			var list = tuple [2],
				stateString = tupla [5];

			// promesa.progreso = lista.add
			// promise.done = list.add
			// promise.fail = list.add
			promesa [tupla [1]] = lista.add;

			// Manejar estado
			if (stateString) {
				list.add (
					function () {

						// estado = "resuelto" (es decir, cumplido)
						// estado = "rechazado"
						state = stateString;
					},

					// rechazadas_callbacks.disable
					// devoluciones_de_llamadas.disable
					tuplas [3 - i] [2] .disable,

					// manipuladores_rechazados.disable
					// manipuladores_cumplidos.disable
					tuplas [3 - i] [3] .disable,

					// progress_callbacks.lock
					tuplas [0] [2] .lock,

					// progress_handlers.lock
					tuplas [0] [3] .lock
				);
			}

			// progress_handlers.fire
			// manipuladores_cumplidos.fire
			// manipuladores_rechazados.fire
			list.add (tupla [3] .fire);

			// deferred.notify = function () {deferred.notifyWith (...)}
			// deferred.resolve = function () {deferred.resolveWith (...)}
			// deferred.reject = function () {deferred.rejectWith (...)}
			diferido [tupla [0]] = funci�n () {
				diferido [tupla [0] + "Con"] (esto === diferido? indefinido: esto, argumentos);
				devuelve esto;
			};

			// diferido.notifyWith = list.fireWith
			// diferido.resolveWith = list.fireWith
			// diferido.rejectWith = list.fireWith
			diferido [tupla [0] + "Con"] = list.fireWith;
		});

		// Haz lo diferido una promesa
		promise.promise (diferido);

		// Llamar a la funci�n dada si la hay
		if (func) {
			func.call (diferido, diferido);
		}

		// �Todo listo!
		retorno diferido;
	},

	// Ayudante diferido
	cuando: function (singleValue) {
		var

			// recuento de subordinados incompletos
			restante = argumentos.longitud,

			// recuento de argumentos sin procesar
			i = restante,

			// datos de cumplimiento subordinados
			resolveContexts = Matriz (i),
			resolveValues ??= slice.call (argumentos),

			// el diferido primario
			primario = jQuery.Deferred (),

			// f�brica de devoluci�n de llamada subordinada
			updateFunc = function (i) {
				funci�n de retorno (valor) {
					resolveContexts [i] = esto;
					resolveValues ??[i] = argumentos.longitud> 1? slice.call (argumentos): valor;
					si (! (--restante)) {
						primary.resolveWith (resolveContexts, resolveValues);
					}
				};
			};

		// Se adoptan argumentos simples y vac�os como Promise.resolve
		si (restante <= 1) {
			adoptValue (singleValue, primary.done (updateFunc (i)) .resolve, primary.reject,
				!restante );

			// Usa .then () para desenvolver las thenables secundarias (cf. gh-3000)
			if (primary.state () === "pendiente" ||
				isFunction (resolveValues ??[i] && resolveValues ??[i]. then)) {

				volver primario, luego ();
			}
		}

		// Se agregan m�ltiples argumentos como Promise.all elementos de la matriz
		mientras yo-- ) {
			adoptValue (resolveValues ??[i], updateFunc (i), primary.reject);
		}

		return primary.promise ();
	}
});


// Estos suelen indicar un error del programador durante el desarrollo,
// advertir sobre ellos lo antes posible en lugar de tragarlos por defecto.
var rerrorNames = / ^ (Eval | Interno | Rango | Referencia | Sintaxis | Tipo | URI) Error $ /;

jQuery.Deferred.exceptionHook = function (error, stack) {

	// Soporte: IE 8 - 9 solamente
	// La consola existe cuando las herramientas de desarrollo est�n abiertas, lo que puede suceder en cualquier momento
	if (window.console && window.console.warn && error && rerrorNames.test (error.name)) {
		window.console.warn ("jQuery.Excepci�n diferida:" + error.message, error.stack, stack);
	}
};




jQuery.readyException = function (error) {
	window.setTimeout (function () {
		lanzar error;
	});
};




// El diferido usado en DOM listo
var readyList = jQuery.Deferred ();

jQuery.fn.ready = function (fn) {

	readyList
		.entonces (fn)

		// Envuelve jQuery.readyException en una funci�n para que la b�squeda
		// ocurre en el momento del manejo de errores en lugar de la devoluci�n de llamada
		// registro.
		.catch (funci�n (error) {
			jQuery.readyException (error);
		});

	devuelve esto;
};

jQuery.extend ({

	// �Est� el DOM listo para ser utilizado? Establezca en verdadero una vez que ocurra.
	isReady: falso,

	// Un contador para rastrear cu�ntos elementos esperar antes
	// el evento listo se dispara. Ver # 6781
	readyWait: 1,

	// Manejar cuando el DOM est� listo
	listo: funci�n (esperar) {

		// Abortar si hay retenciones pendientes o ya estamos listos
		if (esperar === cierto? --jQuery.readyWait: jQuery.isReady) {
			regreso;
		}

		// Recuerda que el DOM est� listo
		jQuery.isReady = verdadero;

		// Si se dispara un evento DOM Ready normal, disminuya y espere si es necesario
		if (espera! == verdadero && --jQuery.readyWait> 0) {
			regreso;
		}

		// Si hay funciones vinculadas, ejecutar
		readyList.resolveWith (documento, [jQuery]);
	}
});

jQuery.ready.then = readyList.then;

// El manejador de eventos listo y el m�todo de autolimpieza
funci�n completada () {
	document.removeEventListener ("DOMContentLoaded", completado);
	window.removeEventListener ("cargar", completado);
	jQuery.ready ();
}

// Detecta los casos en los que se llama a $ (document) .ready ()
// despu�s de que el evento del navegador ya haya ocurrido.
// Soporte: IE <= 9 - 10 solamente
// El IE m�s antiguo a veces indica "interactivo" demasiado pronto
if (document.readyState === "complete" ||
	(document.readyState! == "loading" &&! document.documentElement.doScroll)) {

	// Man�jelo de forma asincr�nica para permitir que los scripts tengan la oportunidad de retrasarse
	window.setTimeout (jQuery.ready);

} dem�s {

	// Usa la pr�ctica devoluci�n de llamada de eventos
	document.addEventListener ("DOMContentLoaded", completado);

	// Una alternativa a window.onload, que siempre funcionar�
	window.addEventListener ("cargar", completado);
}




// M�todo multifuncional para obtener y establecer valores de una colecci�n
// El valor / s se puede ejecutar opcionalmente si es una funci�n
var access = function (elems, fn, key, value, chainable, emptyGet, raw) {
	var i = 0,
		len = elems.length,
		masivo = clave == nulo;

	// Establece muchos valores
	if (toType (clave) === "objeto") {
		encadenable = verdadero;
		para (yo en clave) {
			acceso (elems, fn, i, key [i], true, emptyGet, raw);
		}

	// Establece un valor
	} m�s si (valor! == indefinido) {
		encadenable = verdadero;

		if (! isFunction (valor)) {
			crudo = verdadero;
		}

		if (masivo) {

			// Las operaciones masivas se ejecutan en todo el conjunto
			si (crudo) {
				fn.call (elems, valor);
				fn = nulo;

			// ... excepto al ejecutar valores de funci�n
			} dem�s {
				bulk = fn;
				fn = funci�n (elem, _key, value) {
					return bulk.call (jQuery (elem), valor);
				};
			}
		}

		si (fn) {
			para (; i <len; i ++) {
				fn
					elems [i], key, raw?
						valor :
						value.call (elems [i], i, fn (elems [i], key))
				);
			}
		}
	}

	if (encadenable) {
		devolver elems;
	}

	// Obtiene
	if (masivo) {
		return fn.call (elems);
	}

	volver len? fn (elems [0], clave): emptyGet;
};


// Coincide con la cuerda discontinua para camelizar
var rmsPrefix = / ^ - ms- /,
	rdashAlpha = / - ([az]) / g;

// Usado por camelCase como devoluci�n de llamada para reemplazar ()
function fcamelCase (_todos, letra) {
	return letter.toUpperCase ();
}

// Convertir guiones en camelCase; utilizado por los m�dulos css y de datos
// Soporte: IE <= 9-11, Edge 12-15
// Microsoft olvid� usar el prefijo de su proveedor (# 9572)
function camelCase (cadena) {
	return string.replace (rmsPrefix, "ms-") .replace (rdashAlpha, fcamelCase);
}
var acceptData = function (propietario) {

	// Acepta solo:
	// - Nodo
	// - Nodo.ELEMENT_NODE
	// - Nodo.DOCUMENT_NODE
	// - Objeto
	// - Alguna
	return owner.nodeType === 1 || owner.nodeType === 9 || ! (+ owner.nodeType);
};




function Data () {
	this.expando = jQuery.expando + Data.uid ++;
}

Data.uid = 1;

Data.prototype = {

	cach�: funci�n (propietario) {

		// Comprueba si el objeto propietario ya tiene cach�
		var value = owner [this.expando];

		// Si no, crea uno
		si (! valor) {
			valor = {};

			// Podemos aceptar datos para nodos que no son elementos en navegadores modernos,
			// pero no deber�amos, ver # 8335.
			// Devuelve siempre un objeto vac�o.
			if (acceptData (propietario)) {

				// Si es un nodo que es poco probable que est� en cadena o en bucle
				// usa una asignaci�n simple
				if (owner.nodeType) {
					propietario [this.expando] = valor;

				// De lo contrario, aseg�relo en una propiedad no enumerable
				// configurable debe ser verdadero para permitir que la propiedad sea
				// eliminado cuando se eliminan los datos
				} dem�s {
					Object.defineProperty (propietario, this.expando, {
						valor: valor,
						configurable: verdadero
					});
				}
			}
		}

		valor de retorno;
	},
	conjunto: funci�n (propietario, datos, valor) {
		var prop,
			cache = this.cache (propietario);

		// Manejar: [propietario, clave, valor] argumentos
		// Utilice siempre la clave camelCase (gh-2257)
		if (tipo de datos === "cadena") {
			cach� [camelCase (datos)] = valor;

		// Manejar: [propietario, {propiedades}] argumentos
		} dem�s {

			// Copie las propiedades una por una al objeto de cach�
			para (apoyo en datos) {
				cach� [camelCase (prop)] = datos [prop];
			}
		}
		retorno de cach�;
	},
	obtener: funci�n (propietario, clave) {
		tecla de retorno === indefinido?
			this.cache (propietario):

			// Utilice siempre la clave camelCase (gh-2257)
			propietario [this.expando] && propietario [this.expando] [camelCase (key)];
	},
	acceso: funci�n (propietario, clave, valor) {

		// En los casos en los que:
		//
		// 1. No se especific� ninguna clave
		// 2. Se especific� una clave de cadena, pero no se proporcion� ning�n valor
		//
		// Tome la ruta de "lectura" y permita que el m�todo get determine
		// qu� valor devolver, respectivamente:
		//
		// 1. Todo el objeto de cach�
		// 2. Los datos almacenados en la llave
		//
		si (clave === indefinido ||
				((clave && tipo de clave === "cadena") && valor === indefinido)) {

			return this.get (propietario, clave);
		}

		// Cuando la clave no es una cadena, o tanto una clave como un valor
		// se especifican, establecen o extienden (objetos existentes) con:
		//
		// 1. Un objeto de propiedades
		// 2. Una clave y un valor
		//
		this.set (propietario, clave, valor);

		// Dado que la ruta "set" puede tener dos posibles puntos de entrada
		// devuelve los datos esperados seg�n la ruta que se tom� [*]
		valor de retorno! == indefinido? valor: clave;
	},
	eliminar: funci�n (propietario, clave) {
		var i,
			cache = propietario [this.expando];

		si (cach� === indefinido) {
			regreso;
		}

		if (clave! == indefinido) {

			// Admite una matriz o una cadena de claves separadas por espacios
			if (Array.isArray (clave)) {

				// Si la clave es una matriz de claves ...
				// Siempre configuramos las claves camelCase, as� que elim�nelas.
				key = key.map (camelCase);
			} dem�s {
				clave = camelCase (clave);

				// Si existe una clave con los espacios, �sela.
				// De lo contrario, cree una matriz haciendo coincidir espacios que no sean en blanco
				clave = clave en cach�?
					[ clave ] :
					(key.match (rnothtmlwhite) || []);
			}

			i = key.length;

			mientras yo-- ) {
				eliminar cach� [clave [i]];
			}
		}

		// Elimina el expando si no hay m�s datos
		if (clave === indefinido || jQuery.isEmptyObject (cach�)) {

			// Soporte: Chrome <= 35 - 45
			// El rendimiento de Webkit & Blink sufre al eliminar propiedades
			// de los nodos DOM, as� que config�relo como indefinido en su lugar
			// https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (error restringido)
			if (owner.nodeType) {
				propietario [this.expando] = indefinido;
			} dem�s {
				eliminar propietario [this.expando];
			}
		}
	},
	hasData: function (propietario) {
		var cache = propietario [this.expando];
		return cache! == undefined &&! jQuery.isEmptyObject (cache);
	}
};
var dataPriv = new Data ();

var dataUser = new Data ();



// Resumen de implementaci�n
//
// 1. Aplicar la superficie de API y la compatibilidad sem�ntica con la rama 1.9.x
// 2. Mejorar la capacidad de mantenimiento del m�dulo reduciendo el almacenamiento
// rutas a un solo mecanismo.
// 3. Utilice el mismo mecanismo �nico para admitir datos "privados" y "de usuario".
// 4. _Nunca_ exponga datos "privados" al c�digo de usuario (TODO: Drop _data, _removeData)
// 5. Evite exponer detalles de implementaci�n en objetos de usuario (por ejemplo, propiedades de expansi�n)
// 6. Proporcionar una ruta clara para la actualizaci�n de la implementaci�n a WeakMap en 2014

var rbrace = / ^ (?: \ {[\ w \ W] * \} | \ [[\ w \ W] * \]) $ /,
	rmultiDash = / [AZ] / g;

function getData (datos) {
	si (datos === "verdadero") {
		devuelve verdadero;
	}

	si (datos === "falso") {
		falso retorno;
	}

	si (datos === "nulo") {
		devolver nulo;
	}

	// Solo convierte a un n�mero si no cambia la cadena
	si (datos === + datos + "") {
		retorno + datos;
	}

	if (rbrace.test (datos)) {
		return JSON.parse (datos);
	}

	devolver datos;
}

function dataAttr (elem, key, data) {
	var nombre;

	// Si no se encontr� nada internamente, intente obtener cualquier
	// datos del atributo HTML5 data- *
	if (datos === indefinido && elem.nodeType === 1) {
		nombre = "datos-" + key.replace (rmultiDash, "- $ &") .toLowerCase ();
		data = elem.getAttribute (nombre);

		if (tipo de datos === "cadena") {
			intentar {
				datos = getData (datos);
			} atrapar (e) {}

			// Aseg�rate de configurar los datos para que no se modifiquen m�s tarde
			dataUser.set (elem, clave, datos);
		} dem�s {
			datos = indefinido;
		}
	}
	devolver datos;
}

jQuery.extend ({
	hasData: function (elem) {
		return dataUser.hasData (elem) || dataPriv.hasData (elem);
	},

	datos: funci�n (elem, nombre, datos) {
		return dataUser.access (elem, nombre, datos);
	},

	removeData: function (elem, name) {
		dataUser.remove (elem, nombre);
	},

	// TODO: Ahora que todas las llamadas a _data y _removeData han sido reemplazadas
	// con llamadas directas a m�todos dataPriv, estos pueden quedar obsoletos.
	_data: function (elem, name, data) {
		return dataPriv.access (elem, nombre, datos);
	},

	_removeData: function (elem, name) {
		dataPriv.remove (elem, nombre);
	}
});

jQuery.fn.extend ({
	datos: funci�n (clave, valor) {
		var i, nombre, datos,
			elem = esto [0],
			attrs = elem && elem.attributes;

		// Obtiene todos los valores
		si (clave === indefinido) {
			if (this.length) {
				datos = dataUser.get (elem);

				if (elem.nodeType === 1 &&! dataPriv.get (elem, "hasDataAttrs")) {
					i = attrs.length;
					mientras yo-- ) {

						// Soporte: solo IE 11
						// Los elementos attrs pueden ser nulos (# 14894)
						if (attrs [i]) {
							nombre = atributos [i] .nombre;
							if (name.indexOf ("data-") === 0) {
								nombre = camelCase (nombre.slice (5));
								dataAttr (elem, nombre, datos [nombre]);
							}
						}
					}
					dataPriv.set (elem, "hasDataAttrs", verdadero);
				}
			}

			devolver datos;
		}

		// Establece varios valores
		if (typeof key === "object") {
			devuelve this.each (function () {
				dataUser.set (esto, clave);
			});
		}

		acceso de retorno (esto, funci�n (valor) {
			var datos;

			// El objeto jQuery que llama (coincide con el elemento) no est� vac�o
			// (y por lo tanto aparece un elemento en este [0]) y el
			// El par�metro `value` no estaba indefinido. Un objeto jQuery vac�o
			// dar� como resultado `indefinido` para elem = this [0] que
			// lanza una excepci�n si se intenta leer un cach� de datos.
			if (elem && value === undefined) {

				// Intenta obtener datos de la cach�
				// La clave siempre ser� camelCased in Data
				data = dataUser.get (elem, clave);
				if (data! == undefined) {
					devolver datos;
				}

				// Intente "descubrir" los datos en
				// datos personalizados HTML5- * attrs
				data = dataAttr (elem, clave);
				if (data! == undefined) {
					devolver datos;
				}

				// Lo intentamos mucho, pero los datos no existen.
				regreso;
			}

			// Establecer los datos ...
			this.each (function () {

				// Siempre almacenamos la llave camelCased
				dataUser.set (esto, clave, valor);
			});
		}, nulo, valor, argumentos.longitud> 1, nulo, verdadero);
	},

	removeData: function (key) {
		devuelve this.each (function () {
			dataUser.remove (esto, clave);
		});
	}
});


jQuery.extend ({
	cola: funci�n (elem, tipo, datos) {
		var cola;

		si (elem) {
			tipo = (tipo || "fx") + "cola";
			cola = dataPriv.get (elem, tipo);

			// Acelera la salida de la cola saliendo r�pidamente si esto es solo una b�squeda
			si (datos) {
				if (! cola || Array.isArray (datos)) {
					cola = dataPriv.access (elem, tipo, jQuery.makeArray (datos));
				} dem�s {
					queue.push (datos);
				}
			}
			cola de retorno || [];
		}
	},

	dequeue: function (elem, type) {
		tipo = tipo || "fx";

		var queue = jQuery.queue (elem, tipo),
			startLength = queue.length,
			fn = queue.shift (),
			hooks = jQuery._queueHooks (elem, tipo),
			siguiente = funci�n () {
				jQuery.dequeue (elem, tipo);
			};

		// Si se quita la cola de fx, siempre elimine el centinela de progreso
		if (fn === "inprogress") {
			fn = queue.shift ();
			startLength--;
		}

		si (fn) {

			// Agrega un centinela de progreso para evitar que la cola de fx sea
			// retirado autom�ticamente de la cola
			if (escriba === "fx") {
				queue.unshift ("en progreso");
			}

			// Limpiar la �ltima funci�n de parada de la cola
			eliminar hooks.stop;
			fn.call (elem, siguiente, ganchos);
		}

		if (! startLength && hooks) {
			hooks.empty.fire ();
		}
	},

	// No p�blico: genera un objeto queueHooks o devuelve el actual
	_queueHooks: function (elem, type) {
		var key = type + "queueHooks";
		return dataPriv.get (elem, clave) || dataPriv.access (elem, clave, {
			vac�o: jQuery.Callbacks ("memoria una vez") .add (function () {
				dataPriv.remove (elem, [tipo + "cola", clave]);
			})
		});
	}
});

jQuery.fn.extend ({
	cola: funci�n (tipo, datos) {
		var setter = 2;

		if (typeof type! == "string") {
			datos = tipo;
			tipo = "fx";
			setter--;
		}

		if (argumentos.longitud <establecedor) {
			return jQuery.queue (este [0], tipo);
		}

		devolver datos === indefinido?
			esto :
			this.each (function () {
				var queue = jQuery.queue (este, tipo, datos);

				// Asegurar ganchos para esta cola
				jQuery._queueHooks (este, tipo);

				if (escriba === "fx" && queue [0]! == "inprogress") {
					jQuery.dequeue (este, tipo);
				}
			});
	},
	dequeue: function (type) {
		devuelve this.each (function () {
			jQuery.dequeue (este, tipo);
		});
	},
	clearQueue: function (tipo) {
		return this.queue (escriba || "fx", []);
	},

	// Obtener una promesa resuelta cuando las colas de un cierto tipo
	// se vac�an (fx es el tipo por defecto)
	promesa: funci�n (tipo, obj) {
		var tmp,
			cuenta = 1,
			diferir = jQuery.Deferred (),
			elementos = esto,
			i = esta.longitud,
			resolver = funci�n () {
				if (! (--count)) {
					defer.resolveWith (elementos, [elementos]);
				}
			};

		if (typeof type! == "string") {
			obj = tipo;
			tipo = indefinido;
		}
		tipo = tipo || "fx";

		mientras yo-- ) {
			tmp = dataPriv.get (elementos [i], tipo + "queueHooks");
			if (tmp && tmp.empty) {
				contar ++;
				tmp.empty.add (resolver);
			}
		}
		resolver();
		return diferir.promise (obj);
	}
});
var pnum = (/[+-]?(?:\d*\.|)\d+(?:[e][+-]?\d+|)/) .source;

var rcssNum = new RegExp ("^ (?: ([+ -]) = |) (" + pnum + ") ([az%] *) $", "i");


var cssExpand = ["Arriba", "Derecha", "Abajo", "Izquierda"];

var documentElement = document.documentElement;



	var isAttached = function (elem) {
			return jQuery.contains (elem.ownerDocument, elem);
		},
		compuesto = {compuesto: verdadero};

	// Soporte: IE 9 - 11+, Edge 12 - 18+, iOS 10.0 - 10.2 solamente
	// Verifique el archivo adjunto a trav�s de los l�mites del DOM de sombra cuando sea posible (gh-3504)
	// Soporte: iOS 10.0-10.2 solamente
	// Las primeras versiones de iOS 10 son compatibles con `attachShadow` pero no con` getRootNode`,
	// que conduce a errores. Necesitamos buscar `getRootNode`.
	if (documentElement.getRootNode) {
		isAttached = function (elem) {
			return jQuery.contains (elem.ownerDocument, elem) ||
				elem.getRootNode (compuesto) === elem.ownerDocument;
		};
	}
var isHiddenWithinTree = function (elem, el) {

		// isHiddenWithinTree podr�a ser llamado desde la funci�n de filtro jQuery #;
		// en ese caso, el elemento ser� el segundo argumento
		elem = el || elem;

		// El estilo en l�nea triunfa sobre todo
		return elem.style.display === "ninguno" ||
			elem.style.display === "" &&

			// De lo contrario, verifique el estilo calculado
			// Soporte: Firefox <= 43 - 45
			// Los elementos desconectados pueden tener una visualizaci�n calculada: ninguna, as� que primero confirme que elem es
			// en el documento.
			est� adjunto (elem) &&

			jQuery.css (elem, "pantalla") === "ninguno";
	};



funci�n ajustarCSS (elem, prop, valueParts, interpolaci�n) {
	var ajustado, escala,
		maxIterations = 20,
		currentValue = interpolaci�n?
			function () {
				return tween.cur ();
			}:
			function () {
				return jQuery.css (elem, prop, "");
			},
		initial = currentValue (),
		unit = valueParts && valueParts [3] || (jQuery.cssNumber [prop]? "": "px"),

		// Se requiere el c�lculo del valor inicial para posibles desajustes de unidades
		initialInUnit = elem.nodeType &&
			(jQuery.cssNumber [prop] || unidad! == "px" && + inicial) &&
			rcssNum.exec (jQuery.css (elem, prop));

	if (initialInUnit && initialInUnit [3]! == unidad) {

		// Soporte: Firefox <= 54
		// Reducir a la mitad el valor objetivo de la iteraci�n para evitar la interferencia de los l�mites superiores de CSS (gh-2144)
		inicial = inicial / 2;

		// Unidades de confianza informadas por jQuery.css
		unidad = unidad || initialInUnit [3];

		// Iterativamente aproximado desde un punto de partida distinto de cero
		initialInUnit = + initial || 1;

		while (maxIterations--) {

			// Evaluar y actualizar nuestra mejor suposici�n (duplicando las suposiciones que ponen en cero).
			// Finalizar si la escala es igual o cruza 1 (haciendo que el producto nuevo * antiguo no sea positivo).
			jQuery.style (elem, prop, initialInUnit + unidad);
			if ((1 - scale) * (1 - (scale = currentValue () / initial || 0.5)) <= 0) {
				maxIterations = 0;
			}
			initialInUnit = initialInUnit / escala;

		}

		initialInUnit = initialInUnit * 2;
		jQuery.style (elem, prop, initialInUnit + unidad);

		// Aseg�rate de que actualizamos las propiedades de la interpolaci�n m�s adelante
		valueParts = valueParts || [];
	}

	if (valueParts) {
		initialInUnit = + initialInUnit || + inicial || 0;

		// Aplicar desplazamiento relativo (+ = / - =) si se especifica
		ajustado = valueParts [1]?
			initialInUnit + (valueParts [1] + 1) * valueParts [2]:
			+ valueParts [2];
		si (interpolaci�n) {
			tween.unit = unidad;
			tween.start = initialInUnit;
			tween.end = ajustado;
		}
	}
	retorno ajustado;
}


var defaultDisplayMap = {};

function getDefaultDisplay (elem) {
	var temp,
		doc = elem.ownerDocument,
		nodeName = elem.nodeName,
		display = defaultDisplayMap [nombredenodo];

	if (mostrar) {
		pantalla de retorno;
	}

	temp = doc.body.appendChild (doc.createElement (nombredenodo));
	display = jQuery.css (temp, "display");

	temp.parentNode.removeChild (temp);

	si (mostrar === "ninguno") {
		display = "bloque";
	}
	defaultDisplayMap [nodeName] = mostrar;

	pantalla de retorno;
}

funci�n showHide (elementos, mostrar) {
	pantalla var, elem,
		valores = [],
		�ndice = 0,
		length = elements.length;

	// Determine un nuevo valor de visualizaci�n para los elementos que necesitan cambiar
	para (; �ndice <longitud; �ndice ++) {
		elem = elementos [�ndice];
		if (! elem.style) {
			Seguir;
		}

		display = elem.style.display;
		si (mostrar) {

			// Dado que forzamos la visibilidad de los elementos ocultos en cascada, una inmediata (y lenta)
			// Se requiere verificaci�n en este primer ciclo a menos que tengamos un valor de visualizaci�n no vac�o (ya sea
			// en l�nea o a punto de ser restaurado)
			si (mostrar === "ninguno") {
				valores [�ndice] = dataPriv.get (elem, "display") || nulo;
				if (! valores [�ndice]) {
					elem.style.display = "";
				}
			}
			if (elem.style.display === "" && isHiddenWithinTree (elem)) {
				valores [�ndice] = getDefaultDisplay (elem);
			}
		} dem�s {
			if (display! == "none") {
				valores [�ndice] = "ninguno";

				// Recuerda lo que estamos sobrescribiendo
				dataPriv.set (elem, "pantalla", pantalla);
			}
		}
	}

	// Establecer la visualizaci�n de los elementos en un segundo bucle para evitar un reflujo constante
	para (�ndice = 0; �ndice <longitud; �ndice ++) {
		if (valores [�ndice]! = nulo) {
			elementos [�ndice] .style.display = valores [�ndice];
		}
	}

	elementos de retorno;
}

jQuery.fn.extend ({
	mostrar: funci�n () {
		return showHide (esto, verdadero);
	},
	ocultar: funci�n () {
		return showHide (esto);
	},
	alternar: funci�n (estado) {
		if (typeof state === "boolean") {
			estado de retorno? this.show (): this.hide ();
		}

		devuelve this.each (function () {
			if (isHiddenWithinTree (esto)) {
				jQuery (esto) .show ();
			} dem�s {
				jQuery (esto) .hide ();
			}
		});
	}
});
var rcheckableType = (/ ^ (?: casilla de verificaci�n | radio) $ / i);

var rtagName = (/ <([az] [^ \ / \ 0> \ x20 \ t \ r \ n \ f] *) / i);

var rscriptType = (/ ^ $ | ^ m�dulo $ | \ / (?: java | ecma) script / i);



(funci�n () {
	var fragment = document.createDocumentFragment (),
		div = fragment.appendChild (document.createElement ("div")),
		input = document.createElement ("entrada");

	// Soporte: Android 4.0 - 4.3 solamente
	// Verifique el estado perdido si el nombre est� configurado (# 11217)
	// Soporte: Aplicaciones web de Windows (WWA)
	// `name` y` type` deben usar .setAttribute para WWA (# 14901)
	input.setAttribute ("tipo", "radio");
	input.setAttribute ("comprobado", "comprobado");
	input.setAttribute ("nombre", "t");

	div.appendChild (entrada);

	// Soporte: Android <= 4.1 solamente
	// El WebKit anterior no clona correctamente el estado comprobado en fragmentos
	support.checkClone = div.cloneNode (verdadero) .cloneNode (verdadero) .lastChild.checked;

	// Soporte: IE <= 11 solamente
	// Aseg�rese de que textarea (y casilla de verificaci�n) defaultValue est� clonado correctamente
	div.innerHTML = "<textarea> x </textarea>";
	support.noCloneChecked = !! div.cloneNode (true) .lastChild.defaultValue;

	// Soporte: IE <= 9 solamente
	// IE <= 9 reemplaza las etiquetas <option> con su contenido cuando se inserta fuera de
	// el elemento de selecci�n.
	div.innerHTML = "<opci�n> </opci�n>";
	support.option = !! div.lastChild;
}) ();


// Tenemos que cerrar estas etiquetas para admitir XHTML (# 13200)
var wrapMap = {

	// Los analizadores XHTML no insertan elementos m�gicamente en el
	// de la misma forma que lo hacen los analizadores de sopa de etiquetas. Entonces no podemos acortar
	// esto omitiendo <tbody> u otros elementos requeridos.
	thead: [1, "<table>", "</table>"],
	col: [2, "<table> <colgroup>", "</colgroup> </table>"],
	tr: [2, "<table> <tbody>", "</tbody> </table>"],
	td: [3, "<table> <tbody> <tr>", "</tr> </tbody> </table>"],

	_predeterminado: [0, "", ""]
};

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

// Soporte: IE <= 9 solamente
if (! support.option) {
	wrapMap.optgroup = wrapMap.option = [1, "<select multiple = 'multiple'>", "</select>"];
}


function getAll (contexto, etiqueta) {

	// Soporte: IE <= 9 - 11 solamente
	// Use typeof para evitar la invocaci�n del m�todo de argumento cero en objetos host (# 15151)
	var ret;

	if (typeof context.getElementsByTagName! == "undefined") {
		ret = context.getElementsByTagName (etiqueta || "*");

	} else if (typeof context.querySelectorAll! == "undefined") {
		ret = context.querySelectorAll (etiqueta || "*");

	} dem�s {
		ret = [];
	}

	if (etiqueta === indefinido || etiqueta && nodeName (contexto, etiqueta)) {
		return jQuery.merge ([contexto], ret);
	}

	return ret;
}


// Marcar los scripts como ya evaluados
function setGlobalEval (elems, refElements) {
	var i = 0,
		l = elems.length;

	para (; i <l; i ++) {
		dataPriv.set (
			elems [i],
			"globalEval",
			! refElements || dataPriv.get (refElements [i], "globalEval")
		);
	}
}


var rhtml = / <| & #? \ w +; /;

function buildFragment (elementos, contexto, scripts, selecci�n, ignorado) {
	var elem, tmp, etiqueta, envoltura, adjunto, j,
		fragmento = context.createDocumentFragment (),
		nodos = [],
		i = 0,
		l = elems.length;

	para (; i <l; i ++) {
		elem = elems [i];

		si (elem || elem === 0) {

			// Agregar nodos directamente
			if (toType (elem) === "objeto") {

				// Soporte: Android <= 4.0 solamente, solo PhantomJS 1
				// push.apply (_, arraylike) arroja un WebKit antiguo
				jQuery.merge (nodos, elem.nodeType? [elem]: elem);

			// Convertir no html en un nodo de texto
			} else if (! rhtml.test (elem)) {
				nodes.push (context.createTextNode (elem));

			// Convertir html en nodos DOM
			} dem�s {
				tmp = tmp || fragment.appendChild (context.createElement ("div"));

				// Deserializar una representaci�n est�ndar
				etiqueta = (rtagName.exec (elem) || ["", ""]) [1] .toLowerCase ();
				wrap = wrapMap [etiqueta] || wrapMap._default;
				tmp.innerHTML = envolver [1] + jQuery.htmlPrefiltro (elem) + envolver [2];

				// Descender a trav�s de envoltorios hasta el contenido correcto
				j = envolver [0];
				while (j--) {
					tmp = tmp.lastChild;
				}

				// Soporte: Android <= 4.0 solamente, solo PhantomJS 1
				// push.apply (_, arraylike) arroja un WebKit antiguo
				jQuery.merge (nodos, tmp.childNodes);

				// Recuerda el contenedor de nivel superior
				tmp = fragment.firstChild;

				// Aseg�rese de que los nodos creados sean hu�rfanos (# 12392)
				tmp.textContent = "";
			}
		}
	}

	// Quitar envoltorio del fragmento
	fragment.textContent = "";

	i = 0;
	while ((elem = nodos [i ++])) {

		// Omitir elementos que ya est�n en la colecci�n de contexto (trac-4087)
		if (selecci�n && jQuery.inArray (elem, selecci�n)> -1) {
			if (ignorado) {
				ignorado empujar (elem);
			}
			Seguir;
		}

		adjunto = est� adjunto (elem);

		// Adjuntar al fragmento
		tmp = getAll (fragment.appendChild (elem), "script");

		// Conservar el historial de evaluaci�n del script
		si (adjunto) {
			setGlobalEval (tmp);
		}

		// Capturar ejecutables
		if (scripts) {
			j = 0;
			while ((elem = tmp [j ++])) {
				if (rscriptType.test (elem.type || "")) {
					scripts.push (elem);
				}
			}
		}
	}

	devolver fragmento;
}


var rtypenamespace = /^([^.]*)(?:\.(.+)|)/;

function returnTrue () {
	devuelve verdadero;
}

function returnFalse () {
	falso retorno;
}

// Soporte: IE <= 9 - 11+
// focus () y blur () son asincr�nicos, excepto cuando no son operativos.
// Entonces, espere que el enfoque sea sincr�nico cuando el elemento ya est� activo,
// y difuminar para ser sincr�nico cuando el elemento a�n no est� activo.
// (el enfoque y el desenfoque siempre son sincr�nicos en otros navegadores compatibles,
// esto solo define cu�ndo podemos contar con �l).
function hopeSync (elem, type) {
	return (elem === safeActiveElement ()) === (type === "focus");
}

// Soporte: IE <= 9 solamente
// Acceder a document.activeElement puede arrojar inesperadamente
// https://bugs.jquery.com/ticket/13393
function safeActiveElement () {
	intentar {
		return document.activeElement;
	} atrapar (err) {}
}

funci�n en (elem, tipos, selector, datos, fn, uno) {
	var origFn, tipo;

	// Los tipos pueden ser un mapa de tipos / manejadores
	if (typeof types === "object") {

		// (tipos-Objeto, selector, datos)
		if (typeof selector! == "string") {

			// (tipos-Objeto, datos)
			datos = datos || selector;
			selector = indefinido;
		}
		para (escriba tipos) {
			on (elem, tipo, selector, datos, tipos [tipo], uno);
		}
		return elem;
	}

	si (datos == nulo && fn == nulo) {

		// (tipos, fn)
		fn = selector;
		datos = selector = indefinido;
	} m�s si (fn == nulo) {
		if (typeof selector === "string") {

			// (tipos, selector, fn)
			fn = datos;
			datos = indefinido;
		} dem�s {

			// (tipos, datos, fn)
			fn = datos;
			datos = selector;
			selector = indefinido;
		}
	}
	si (fn === falso) {
		fn = returnFalse;
	} m�s si (! fn) {
		return elem;
	}

	si (uno === 1) {
		origFn = fn;
		fn = funci�n (evento) {

			// Puede usar un conjunto vac�o, ya que el evento contiene la informaci�n
			jQuery (). off (evento);
			return origFn.apply (esto, argumentos);
		};

		// Usa el mismo guid para que la persona que llama pueda eliminar usando origFn
		fn.guid = origFn.guid || (origFn.guid = jQuery.guid ++);
	}
	return elem.each (function () {
		jQuery.event.add (esto, tipos, fn, datos, selector);
	});
}

/ *
 * Funciones auxiliares para la gesti�n de eventos, que no forman parte de la interfaz p�blica.
 * Apoyos de la biblioteca addEvent de Dean Edwards para muchas de las ideas.
 * /
jQuery.event = {

	global: {},

	agregar: funci�n (elem, tipos, manejador, datos, selector) {

		var handleObjIn, eventHandle, tmp,
			eventos, t, handleObj,
			especial, controladores, tipo, espacios de nombres, origType,
			elemData = dataPriv.get (elem);

		// Solo adjunte eventos a objetos que acepten datos
		if (! acceptData (elem)) {
			regreso;
		}

		// La persona que llama puede pasar un objeto de datos personalizados en lugar del controlador
		if (handler.handler) {
			handleObjIn = manejador;
			handler = handleObjIn.handler;
			selector = handleObjIn.selector;
		}

		// Aseg�rese de que los selectores no v�lidos arrojen excepciones en el momento de adjuntar
		// Evaluar contra documentElement en caso de que elem sea un nodo que no sea un elemento (p. Ej., Documento)
		if (selector) {
			jQuery.find.matchesSelector (documentElement, selector);
		}

		// Aseg�rese de que el controlador tenga una ID �nica, que se usa para encontrarlo / eliminarlo m�s tarde
		if (! handler.guid) {
			handler.guid = jQuery.guid ++;
		}

		// Inicia la estructura de eventos del elemento y el controlador principal, si este es el primero
		if (! (eventos = elemData.events)) {
			eventos = elemData.events = Object.create (nulo);
		}
		if (! (eventHandle = elemData.handle)) {
			eventHandle = elemData.handle = function (e) {

				// Descartar el segundo evento de un jQuery.event.trigger () y
				// cuando se llama a un evento despu�s de que se haya descargado una p�gina
				return typeof jQuery! == "undefined" && jQuery.event.triggered! == e.type?
					jQuery.event.dispatch.apply (elem, argumentos): indefinido;
			};
		}

		// Maneja m�ltiples eventos separados por un espacio
		tipos = (tipos || "") .match (rnothtmlwhite) || [""];
		t = tipos.longitud;
		while (t--) {
			tmp = rtypenamespace.exec (tipos [t]) || [];
			type = origType = tmp [1];
			espacios de nombres = (tmp [2] || "") .split (".") .sort ();

			// Debe * haber un tipo, sin adjuntar controladores de solo espacio de nombres
			if (! type) {
				Seguir;
			}

			// Si el evento cambia de tipo, use los controladores de eventos especiales para el tipo cambiado
			especial = jQuery.event.special [tipo] || {};

			// Si el selector est� definido, determina el tipo de api de evento especial; de lo contrario, se da el tipo
			type = (selector? special.delegateType: special.bindType) || tipo;

			// Actualizaci�n especial basada en el tipo de reinicio reciente
			especial = jQuery.event.special [tipo] || {};

			// handleObj se pasa a todos los controladores de eventos
			handleObj = jQuery.extend ({
				tipo: tipo,
				origType: origType,
				datos: datos,
				manejador: manejador,
				guid: handler.guid,
				selector: selector,
				needContext: selector && jQuery.expr.match.needsContext.test (selector),
				espacio de nombres: espacios de nombres.join (".")
			}, handleObjIn);

			// Iniciamos la cola del controlador de eventos si somos los primeros
			if (! (manejadores = eventos [tipo])) {
				manejadores = eventos [tipo] = [];
				handlers.delegateCount = 0;

				// Solo use addEventListener si el controlador de eventos especiales devuelve falso
				if (! special.setup ||
					special.setup.call (elem, data, namespaces, eventHandle) === false) {

					if (elem.addEventListener) {
						elem.addEventListener (tipo, eventHandle);
					}
				}
			}

			if (special.add) {
				special.add.call (elem, handleObj);

				if (! handleObj.handler.guid) {
					handleObj.handler.guid = handler.guid;
				}
			}

			// Agregar a la lista de controladores del elemento, delegados al frente
			if (selector) {
				handlers.splice (handlers.delegateCount ++, 0, handleObj);
			} dem�s {
				handlers.push (handleObj);
			}

			// Realice un seguimiento de los eventos que se han utilizado alguna vez, para la optimizaci�n de eventos
			jQuery.event.global [tipo] = verdadero;
		}

	},

	// Separar un evento o un conjunto de eventos de un elemento
	remove: function (elem, types, handler, selector, mappedTypes) {

		var j, origCount, tmp,
			eventos, t, handleObj,
			especial, controladores, tipo, espacios de nombres, origType,
			elemData = dataPriv.hasData (elem) && dataPriv.get (elem);

		if (! elemData ||! (eventos = elemData.events)) {
			regreso;
		}

		// Una vez por cada tipo. Espacio de nombres en tipos; el tipo puede omitirse
		tipos = (tipos || "") .match (rnothtmlwhite) || [""];
		t = tipos.longitud;
		while (t--) {
			tmp = rtypenamespace.exec (tipos [t]) || [];
			type = origType = tmp [1];
			espacios de nombres = (tmp [2] || "") .split (".") .sort ();

			// Desvincula todos los eventos (en este espacio de nombres, si se proporciona) para el elemento
			if (! type) {
				para (escriba eventos) {
					jQuery.event.remove (elem, tipo + tipos [t], manejador, selector, verdadero);
				}
				Seguir;
			}

			especial = jQuery.event.special [tipo] || {};
			type = (selector? special.delegateType: special.bindType) || tipo;
			manejadores = eventos [tipo] || [];
			tmp = tmp [2] &&
				new RegExp ("(^ | \\.)" + namespaces.join ("\\. (?:. * \\. |)") + "(\\. | $)");

			// Eliminar eventos coincidentes
			origCount = j = handlers.length;
			while (j--) {
				handleObj = manipuladores [j];

				if ((mappedTypes || origType === handleObj.origType) &&
					(! handler || handler.guid === handleObj.guid) &&
					(! tmp || tmp.test (handleObj.namespace)) &&
					(! selector || selector === handleObj.selector ||
						selector === "**" && handleObj.selector)) {
					handlers.splice (j, 1);

					if (handleObj.selector) {
						handlers.delegateCount--;
					}
					if (special.remove) {
						special.remove.call (elem, handleObj);
					}
				}
			}

			// Eliminamos el controlador de eventos gen�rico si eliminamos algo y no existen m�s controladores
			// (evita la posibilidad de una recursividad sin fin durante la eliminaci�n de controladores de eventos especiales)
			if (origCount &&! handlers.length) {
				if (! special.teardown ||
					special.teardown.call (elem, namespaces, elemData.handle) === falso) {

					jQuery.removeEvent (elem, tipo, elemData.handle);
				}

				eliminar eventos [tipo];
			}
		}

		// Elimina los datos y el expando si ya no se usa
		if (jQuery.isEmptyObject (eventos)) {
			dataPriv.remove (elem, "manejar eventos");
		}
	},

	despacho: function (nativeEvent) {

		var i, j, ret, emparejado, handleObj, handlerQueue,
			args = nueva matriz (argumentos.longitud),

			// Crea un jQuery.Event escribible desde el objeto de evento nativo
			evento = jQuery.event.fix (nativeEvent),

			manipuladores = (
				dataPriv.get (esto, "eventos") || Object.create (nulo)
			) [event.type] || [],
			especial = jQuery.event.special [event.type] || {};

		// Utilice jQuery.Event corregido en lugar del evento nativo (solo lectura)
		args [0] = evento;

		para (i = 1; i <argumentos.longitud; i ++) {
			argumentos [i] = argumentos [i];
		}

		event.delegateTarget = esto;

		// Llame al gancho preDispatch para el tipo mapeado y d�jelo rescatar si lo desea
		if (special.preDispatch && special.preDispatch.call (this, event) === false) {
			regreso;
		}

		// Determinar los controladores
		handlerQueue = jQuery.event.handlers.call (esto, evento, controladores);

		// Ejecuta los delegados primero; es posible que quieran detener la propagaci�n debajo de nosotros
		i = 0;
		while ((coincidente = handlerQueue [i ++]) &&! event.isPropagationStopped ()) {
			event.currentTarget = matched.elem;

			j = 0;
			while ((handleObj = match.handlers [j ++]) &&
				! event.isImmediatePropagationStopped ()) {

				// Si el evento tiene un espacio de nombres, entonces cada controlador solo se invoca si est�
				// especialmente universal o sus espacios de nombres son un superconjunto de los del evento.
				if (! event.rnamespace || handleObj.namespace === false ||
					event.rnamespace.test (handleObj.namespace)) {

					event.handleObj = handleObj;
					event.data = handleObj.data;

					ret = ((jQuery.event.special [handleObj.origType] || {}) .handle ||
						handleObj.handler) .apply (coincidente.elem, args);

					if (ret! == indefinido) {
						if ((event.result = ret) === false) {
							event.preventDefault ();
							event.stopPropagation ();
						}
					}
				}
			}
		}

		// Llame al gancho postDispatch para el tipo mapeado
		if (special.postDispatch) {
			special.postDispatch.call (esto, evento);
		}

		return event.result;
	},

	controladores: funci�n (evento, controladores) {
		var i, handleObj, sel, matchedHandlers, matchedSelectors,
			handlerQueue = [],
			delegateCount = handlers.delegateCount,
			cur = event.target;

		// Encuentra controladores de delegados
		si (delegateCount &&

			// Soporte: IE <= 9
			// �rboles de instancia <use> de SVG de agujero negro (trac-13180)
			cur.nodeType &&

			// Soporte: Firefox <= 42
			// Suprime los clics que infringen las especificaciones que indican un bot�n de puntero no principal (trac-3861)
			// https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
			// Soporte: solo IE 11
			// ... pero no los "clics" de las teclas de flecha de las entradas de radio, que pueden tener `button` -1 (gh-2343)
			! (event.type === "haga clic" && event.button> = 1)) {

			para (; cur! == esto; cur = cur.parentNode || esto) {

				// No marque los no elementos (# 13208)
				// No procese los clics en elementos deshabilitados (# 6911, # 8165, # 11382, # 11764)
				if (cur.nodeType === 1 &&! (event.type === "click" && cur.disabled === true)) {
					matchedHandlers = [];
					matchedSelectors = {};
					para (i = 0; i <delegateCount; i ++) {
						handleObj = manipuladores [i];

						// No entre en conflicto con las propiedades de Object.prototype (# 13203)
						sel = handleObj.selector + "";

						if (matchedSelectors [sel] === undefined) {
							matchedSelectors [sel] = handleObj.needsContext?
								jQuery (sel, esto) .index (cur)> -1:
								jQuery.find (sel, this, null, [cur]) .length;
						}
						if (matchedSelectors [sel]) {
							matchedHandlers.push (handleObj);
						}
					}
					if (matchedHandlers.length) {
						handlerQueue.push ({elem: cur, handlers: matchedHandlers});
					}
				}
			}
		}

		// Agrega los manejadores restantes (directamente enlazados)
		cur = esto;
		if (delegateCount <handlers.length) {
			handlerQueue.push ({elem: cur, handlers: handlers.slice (delegateCount)});
		}

		return handlerQueue;
	},

	addProp: function (nombre, gancho) {
		Object.defineProperty (jQuery.Event.prototype, name, {
			enumerable: verdadero,
			configurable: verdadero,

			get: isFunction (gancho)?
				function () {
					if (this.originalEvent) {
						return hook (this.originalEvent);
					}
				}:
				function () {
					if (this.originalEvent) {
						return this.originalEvent [nombre];
					}
				},

			conjunto: funci�n (valor) {
				Object.defineProperty (este, nombre, {
					enumerable: verdadero,
					configurable: verdadero,
					escribible: verdadero,
					valor: valor
				});
			}
		});
	},

	fix: function (originalEvent) {
		return originalEvent [jQuery.expando]?
			originalEvent:
			nuevo jQuery.Event (originalEvent);
	},

	especial: {
		carga: {

			// Evita que los eventos image.load activados se propaguen a window.load
			noBubble: verdadero
		},
		haga clic en: {

			// Utilice un evento nativo para garantizar el estado correcto de las entradas comprobables
			configuraci�n: funci�n (datos) {

				// Para la compresibilidad mutua con _default, reemplace el acceso `this` con una var local.
				// `|| data` es un c�digo muerto destinado solo a preservar la variable a trav�s de la minificaci�n.
				var el = esto || datos;

				// Reclama el primer controlador
				if (rcheckableType.test (el.type) &&
					el.click && nodeName (el, "input")) {

					// dataPriv.set (el, "clic", ...)
					leverageNative (el, "clic", returnTrue);
				}

				// Devuelve falso para permitir el procesamiento normal en la persona que llama
				falso retorno;
			},
			disparador: funci�n (datos) {

				// Para la compresibilidad mutua con _default, reemplace el acceso `this` con una var local.
				// `|| data` es un c�digo muerto destinado solo a preservar la variable a trav�s de la minificaci�n.
				var el = esto || datos;

				// Forzar la configuraci�n antes de activar un clic
				if (rcheckableType.test (el.type) &&
					el.click && nodeName (el, "input")) {

					leverageNative (el, "clic");
				}

				// Devuelve un valor no falso para permitir la propagaci�n normal de la ruta de eventos
				devuelve verdadero;
			},

			// Para la coherencia entre navegadores, suprima .click () nativo en los enlaces
			// Ev�telo tambi�n si actualmente estamos dentro de una pila de eventos nativos apalancados
			_default: function (evento) {
				var target = event.target;
				return rcheckableType.test (target.type) &&
					target.click && nodeName (objetivo, "entrada") &&
					dataPriv.get (destino, "clic") ||
					nodeName (objetivo, "a");
			}
		},

		antes de descargar: {
			postDispatch: function (evento) {

				// Soporte: Firefox 20+
				// Firefox no alerta si el campo returnValue no est� configurado.
				if (event.result! == undefined && event.originalEvent) {
					event.originalEvent.returnValue = event.result;
				}
			}
		}
	}
};

// Asegurar la presencia de un detector de eventos que maneja los activados manualmente
// eventos sint�ticos interrumpiendo el progreso hasta que se vuelva a invocar en respuesta a
// * eventos nativos * que dispara directamente, asegurando que los cambios de estado tengan
// ya ha ocurrido antes de que se invoquen a otros oyentes.
function leverageNative (el, type, waitSync) {

	// La falta de hopeSync indica una llamada de activaci�n, que debe forzar la configuraci�n a trav�s de jQuery.event.add
	if (! hopeSync) {
		if (dataPriv.get (el, type) === undefined) {
			jQuery.event.add (el, tipo, returnTrue);
		}
		regreso;
	}

	// Registre el controlador como un controlador universal especial para todos los espacios de nombres de eventos
	dataPriv.set (el, tipo, falso);
	jQuery.event.add (el, type, {
		espacio de nombres: falso,
		controlador: funci�n (evento) {
			var notAsync, resultado,
				guardado = dataPriv.get (este, tipo);

			if ((event.isTrigger & 1) && this [type]) {

				// Interrumpe el procesamiento del evento ed .trigger () sint�tico externo
				// Los datos guardados deben ser falsos en tales casos, pero pueden ser un objeto de captura sobrante
				// desde un controlador nativo asincr�nico (gh-4350)
				if (! Saved.length) {

					// Almacenar argumentos para usarlos al manejar el evento nativo interno
					// Siempre habr� al menos un argumento (un objeto de evento), por lo que esta matriz
					// no se confundir� con un objeto de captura sobrante.
					guardado = slice.call (argumentos);
					dataPriv.set (este, tipo, guardado);

					// Activa el evento nativo y captura su resultado
					// Soporte: IE <= 9 - 11+
					// focus () y blur () son asincr�nicos
					notAsync = hopeSync (este, tipo);
					este tipo ]();
					resultado = dataPriv.get (este, tipo);
					if (guardado! == resultado || notAsync) {
						dataPriv.set (este, tipo, falso);
					} dem�s {
						resultado = {};
					}
					si (guardado! == resultado) {

						// Cancelar el evento sint�tico externo
						event.stopImmediatePropagation ();
						event.preventDefault ();

						// Soporte: Chrome 86+
						// En Chrome, si un elemento que tiene un controlador focusout est� difuminado por
						// al hacer clic fuera de �l, invoca al controlador de forma sincr�nica. Si
						// ese manejador llama a `.remove ()` en el elemento, los datos se borran,
						// dejando `result` indefinido. Necesitamos protegernos contra esto.
						devolver resultado && result.value;
					}

				// Si se trata de un evento sint�tico interno para un evento con un sustituto burbujeante
				// (enfocar o difuminar), suponga que el sustituto ya se propag� al desencadenar el
				// evento nativo y evitar que vuelva a suceder aqu�.
				// Esto t�cnicamente hace que el orden sea incorrecto en `.trigger ()` (en el que el
				// el sustituto burbujeante se propaga * despu�s * de la base no burbujeante), pero eso parece
				// menos malo que la duplicaci�n.
				} m�s si ((jQuery.event.special [tipo] || {}) .delegateType) {
					event.stopPropagation ();
				}

			// Si se trata de un evento nativo activado anteriormente, todo est� ahora en orden
			// Dispara un evento sint�tico interno con los argumentos originales
			} else if (Saved.length) {

				// ... y captura el resultado
				dataPriv.set (este, tipo, {
					valor: jQuery.event.trigger (

						// Soporte: IE <= 9 - 11+
						// Ampl�e con el prototipo para restablecer el stopImmediatePropagation () anterior
						jQuery.extend (guardado [0], jQuery.Event.prototype),
						rebanada.salvada (1),
						esto
					)
				});

				// Abortar el manejo del evento nativo
				event.stopImmediatePropagation ();
			}
		}
	});
}

jQuery.removeEvent = function (elem, type, handle) {

	// Este "si" es necesario para objetos simples
	if (elem.removeEventListener) {
		elem.removeEventListener (tipo, identificador);
	}
};

jQuery.Event = function (src, props) {

	// Permitir la creaci�n de instancias sin la palabra clave 'nueva'
	if (! (esta instancia de jQuery.Event)) {
		return new jQuery.Event (src, props);
	}

	// Objeto de evento
	if (src && src.type) {
		this.originalEvent = src;
		this.type = src.type;

		// Los eventos que propagan el documento pueden haber sido marcados como prevenidos
		// por un manejador m�s abajo del �rbol; reflejar el valor correcto.
		this.isDefaultPrevented = src.defaultPrevented ||
				src.defaultPrevented === indefinido &&

				// Soporte: Android <= 2.3 solamente
				src.returnValue === falso?
			returnTrue:
			falso retorno;

		// Crear propiedades de destino
		// Soporte: Safari <= 6 - 7 solamente
		// El destino no debe ser un nodo de texto (# 504, # 13143)
		this.target = (src.target && src.target.nodeType === 3)?
			src.target.parentNode:
			src.target;

		this.currentTarget = src.currentTarget;
		this.relatedTarget = src.relatedTarget;

	// Tipo de evento
	} dem�s {
		this.type = src;
	}

	// Coloca propiedades proporcionadas expl�citamente en el objeto de evento
	if (props) {
		jQuery.extend (esto, apoyos);
	}

	// Crea una marca de tiempo si el evento entrante no tiene una
	this.timeStamp = src && src.timeStamp || Date.now ();

	// Marcarlo como fijo
	esto [jQuery.expando] = verdadero;
};

// jQuery.Event se basa en eventos DOM3 seg�n lo especificado por ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
	constructor: jQuery.Event,
	isDefaultPrevented: returnFalse,
	isPropagationStopped: returnFalse,
	isImmediatePropagationStopped: returnFalse,
	isSimulated: falso,

	preventDefault: function () {
		var e = this.originalEvent;

		this.isDefaultPrevented = returnTrue;

		if (e &&! this.isSimulated) {
			e.preventDefault ();
		}
	},
	stopPropagation: function () {
		var e = this.originalEvent;

		this.isPropagationStopped = returnTrue;

		if (e &&! this.isSimulated) {
			e.stopPropagation ();
		}
	},
	stopImmediatePropagation: function () {
		var e = this.originalEvent;

		this.isImmediatePropagationStopped = returnTrue;

		if (e &&! this.isSimulated) {
			e.stopImmediatePropagation ();
		}

		this.stopPropagation ();
	}
};

// Incluye todos los accesorios de eventos comunes, incluidos los accesorios espec�ficos de KeyEvent y MouseEvent
jQuery.each ({
	altKey: verdadero,
	burbujas: cierto,
	cancelable: verdadero,
	changeTouches: cierto,
	ctrlKey: verdadero,
	detalle: cierto,
	eventPhase: verdadero,
	metaKey: verdadero,
	pageX: verdadero,
	pageY: verdadero,
	shiftKey: verdadero,
	ver: verdadero,
	"char": cierto,
	c�digo: verdadero,
	charCode: verdadero,
	clave: cierto,
	keyCode: verdadero,
	bot�n: cierto,
	botones: cierto,
	clientX: cierto,
	clientY: cierto,
	offsetX: verdadero,
	offsetY: verdadero,
	pointerId: verdadero,
	pointerType: verdadero,
	screenX: cierto,
	screenY: verdadero,
	targetTouches: verdadero,
	toElement: verdadero,
	toca: cierto,
	cual: cierto
}, jQuery.event.addProp);

jQuery.each ({focus: "focusin", blur: "focusout"}, function (type, delegateType) {
	jQuery.event.special [tipo] = {

		// Utilice el evento nativo si es posible para que la secuencia de desenfoque / enfoque sea correcta
		configuraci�n: funci�n () {

			// Reclama el primer controlador
			// dataPriv.set (esto, "foco", ...)
			// dataPriv.set (esto, "difuminar", ...)
			leverageNative (este, tipo, esperaSync);

			// Devuelve falso para permitir el procesamiento normal en la persona que llama
			falso retorno;
		},
		disparador: funci�n () {

			// Forzar la configuraci�n antes del disparo
			leverageNative (este, tipo);

			// Devuelve un valor no falso para permitir la propagaci�n normal de la ruta de eventos
			devuelve verdadero;
		},

		// Suprime el enfoque nativo o el desenfoque porque ya se est� disparando
		// en leverageNative.
		_default: function () {
			devuelve verdadero;
		},

		delegateType: delegateType
	};
});

// Cree eventos mouseenter / leave usando mouseover / out y verificaciones de tiempo de evento
// para que la delegaci�n de eventos funcione en jQuery.
// Haz lo mismo para pointerenter / pointerleave y pointerover / pointerout
//
// Soporte: solo Safari 7
// Safari env�a mouseenter con demasiada frecuencia; ver:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// para la descripci�n del error (tambi�n exist�a en versiones anteriores de Chrome).
jQuery.each ({
	mouseenter: "mouseover",
	mouseleave: "mouseout",
	pointerenter: "pointerover",
	pointerleave: "pointerout"
}, function (orig, fix) {
	jQuery.event.special [orig] = {
		delegateType: arreglar,
		bindType: arreglar,

		manejar: funci�n (evento) {
			var ret,
				objetivo = esto,
				related = event.relatedTarget,
				handleObj = event.handleObj;

			// Para mouseenter / leave, llame al controlador si el relacionado est� fuera del objetivo.
			// NB: No relatedTarget si el mouse a la izquierda / ingres� a la ventana del navegador
			if (! related || (related! == target &&! jQuery.contains (target, related))) {
				event.type = handleObj.origType;
				ret = handleObj.handler.apply (esto, argumentos);
				event.type = fix;
			}
			return ret;
		}
	};
});

jQuery.fn.extend ({

	on: function (tipos, selector, datos, fn) {
		volver sobre (esto, tipos, selector, datos, fn);
	},
	uno: funci�n (tipos, selector, datos, fn) {
		volver sobre (esto, tipos, selector, datos, fn, 1);
	},
	off: function (tipos, selector, fn) {
		var handleObj, tipo;
		if (tipos && tipos.preventDefault && tipos.handleObj) {

			// (evento) enviado jQuery.Event
			handleObj = types.handleObj;
			jQuery (types.delegateTarget) .off (
				handleObj.namespace?
					handleObj.origType + "." + handleObj.namespace:
					handleObj.origType,
				handleObj.selector,
				handleObj.handler
			);
			devuelve esto;
		}
		if (typeof types === "object") {

			// (tipos-objeto [, selector])
			para (escriba tipos) {
				this.off (tipo, selector, tipos [tipo]);
			}
			devuelve esto;
		}
		if (selector === falso || tipo de selector === "funci�n") {

			// (tipos [, fn])
			fn = selector;
			selector = indefinido;
		}
		si (fn === falso) {
			fn = returnFalse;
		}
		devuelve this.each (function () {
			jQuery.event.remove (esto, tipos, fn, selector);
		});
	}
});


var

	// Soporte: IE <= 10-11, Edge 12-13 solamente
	// En IE / Edge, el uso de grupos de expresiones regulares aqu� provoca graves ralentizaciones.
	// Ver https://connect.microsoft.com/IE/feedback/details/1736512/
	rnoInnerhtml = / <script | <estilo | <enlace / i,

	// comprobado = "comprobado" o comprobado
	rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,
	rcleanScript = / ^ \ s * <! (?: \ [CDATA \ [| -) | (?: \] \] | -)> \ s * $ / g;

// Prefiere un tbody sobre su tabla padre para contener nuevas filas
function manipulationTarget (elem, content) {
	if (nodeName (elem, "tabla") &&
		nodeName (content.nodeType! == 11? content: content.firstChild, "tr")) {

		return jQuery (elem) .children ("tbody") [0] || elem;
	}

	return elem;
}

// Reemplazar / restaurar el atributo de tipo de los elementos del script para una manipulaci�n DOM segura
function disableScript (elem) {
	elem.type = (elem.getAttribute ("tipo")! == null) + "/" + elem.type;
	return elem;
}
function restoreScript (elem) {
	if ((elem.type || "") .slice (0, 5) === "true /") {
		elem.type = elem.type.slice (5);
	} dem�s {
		elem.removeAttribute ("tipo");
	}

	return elem;
}

function cloneCopyEvent (src, dest) {
	var i, l, type, pdataOld, udataOld, udataCur, events;

	if (dest.nodeType! == 1) {
		regreso;
	}

	// 1. Copia datos privados: eventos, manejadores, etc.
	if (dataPriv.hasData (src)) {
		pdataOld = dataPriv.get (src);
		eventos = pdataOld.events;

		if (eventos) {
			dataPriv.remove (dest, "manejar eventos");

			para (escriba eventos) {
				for (i = 0, l = events [type] .length; i <l; i ++) {
					jQuery.event.add (destino, tipo, eventos [tipo] [i]);
				}
			}
		}
	}

	// 2. Copiar datos de usuario
	if (dataUser.hasData (src)) {
		udataOld = dataUser.access (src);
		udataCur = jQuery.extend ({}, udataOld);

		dataUser.set (dest, udataCur);
	}
}

// Corregir errores de IE, ver pruebas de soporte
function fixInput (src, dest) {
	var nodeName = dest.nodeName.toLowerCase ();

	// No persiste el estado marcado de una casilla de verificaci�n o bot�n de opci�n clonado.
	if (nodeName === "input" && rcheckableType.test (src.type)) {
		dest.checked = src.checked;

	// No devuelve la opci�n seleccionada al estado seleccionado predeterminado al clonar opciones
	} else if (nodeName === "input" || nodeName === "textarea") {
		dest.defaultValue = src.defaultValue;
	}
}

funci�n domManip (colecci�n, argumentos, devoluci�n de llamada, ignorado) {

	// Aplanar cualquier arreglo anidado
	args = plano (args);

	var fragment, first, scripts, hasScripts, node, doc,
		i = 0,
		l = colecci�n.longitud,
		iNoClone = l - 1,
		valor = argumentos [0],
		valueIsFunction = isFunction (valor);

	// No podemos clonar fragmentos de nodo que contengan marcado, en WebKit
	if (valueIsFunction ||
			(l> 1 && tipo de valor === "cadena" &&
				! support.checkClone && rchecked.test (value))) {
		return collection.each (funci�n (�ndice) {
			var self = collection.eq (�ndice);
			if (valueIsFunction) {
				args [0] = value.call (esto, �ndice, self.html ());
			}
			domManip (self, args, callback, ignorado);
		});
	}

	si (l) {
		fragment = buildFragment (argumentos, colecci�n [0] .ownerDocument, falso, colecci�n, ignorado);
		first = fragment.firstChild;

		if (fragment.childNodes.length === 1) {
			fragmento = primero;
		}

		// Requiere contenido nuevo o inter�s en elementos ignorados para invocar la devoluci�n de llamada
		si (primero || ignorado) {
			scripts = jQuery.map (getAll (fragment, "script"), disableScript);
			hasScripts = scripts.length;

			// Usa el fragmento original para el �ltimo elemento
			// en lugar del primero porque puede terminar
			// vaciarse incorrectamente en determinadas situaciones (# 8070).
			para (; i <l; i ++) {
				nodo = fragmento;

				si (i! == iNoClone) {
					nodo = jQuery.clone (nodo, verdadero, verdadero);

					// Conserve las referencias a los scripts clonados para su posterior restauraci�n
					if (hasScripts) {

						// Soporte: Android <= 4.0 solamente, solo PhantomJS 1
						// push.apply (_, arraylike) arroja un WebKit antiguo
						jQuery.merge (scripts, getAll (nodo, "script"));
					}
				}

				callback.call (colecci�n [i], nodo, i);
			}

			if (hasScripts) {
				doc = scripts [scripts.length - 1] .ownerDocument;

				// Rehabilitar scripts
				jQuery.map (scripts, restoreScript);

				// Evaluar los scripts ejecutables en la primera inserci�n del documento
				para (i = 0; i <hasScripts; i ++) {
					nodo = secuencias de comandos [i];
					if (rscriptType.test (node.type || "") &&
						! dataPriv.access (nodo, "globalEval") &&
						jQuery.contains (doc, nodo)) {

						if (node.src && (node.type || "") .toLowerCase ()! == "module") {

							// Dependencia AJAX opcional, pero no ejecutar� scripts si no est�n presentes
							if (jQuery._evalUrl &&! node.noModule) {
								jQuery._evalUrl (node.src, {
									nonce: node.nonce || node.getAttribute ("nonce")
								}, Doc );
							}
						} dem�s {
							DOMEval (node.textContent.replace (rcleanScript, ""), nodo, doc);
						}
					}
				}
			}
		}
	}

	recogida de devoluci�n;
}

funci�n eliminar (elem, selector, keepData) {
	nodo var,
		nodos = selector? jQuery.filter (selector, elem): elem,
		i = 0;

	para (; (nodo = nodos [i])! = nulo; i ++) {
		if (! keepData && node.nodeType === 1) {
			jQuery.cleanData (getAll (nodo));
		}

		if (node.parentNode) {
			if (keepData && isAttached (nodo)) {
				setGlobalEval (getAll (nodo, "secuencia de comandos"));
			}
			node.parentNode.removeChild (nodo);
		}
	}

	return elem;
}

jQuery.extend ({
	htmlPrefilter: function (html) {
		return html;
	},

	clon: function (elem, dataAndEvents, deepDataAndEvents) {
		var i, l, srcElements, destElements,
			clon = elem.cloneNode (verdadero),
			inPage = isAttached (elem);

		// Solucionar problemas de clonaci�n de IE
		if (! support.noCloneChecked && (elem.nodeType === 1 || elem.nodeType === 11) &&
				! jQuery.isXMLDoc (elem)) {

			// Evitamos Sizzle aqu� por razones de rendimiento: https://jsperf.com/getall-vs-sizzle/2
			destElements = getAll (clonar);
			srcElements = getAll (elem);

			para (i = 0, l = srcElements.length; i <l; i ++) {
				fixInput (srcElements [i], destElements [i]);
			}
		}

		// Copia los eventos del original al clon
		if (dataAndEvents) {
			if (deepDataAndEvents) {
				srcElements = srcElements || getAll (elem);
				destElements = destElements || getAll (clonar);

				para (i = 0, l = srcElements.length; i <l; i ++) {
					cloneCopyEvent (srcElements [i], destElements [i]);
				}
			} dem�s {
				cloneCopyEvent (elem, clon);
			}
		}

		// Conservar el historial de evaluaci�n del script
		destElements = getAll (clon, "script");
		if (destElements.length> 0) {
			setGlobalEval (destElements,! inPage && getAll (elem, "script"));
		}

		// Devuelve el conjunto clonado
		volver a clonar;
	},

	cleanData: function (elems) {
		var datos, elem, tipo,
			especial = jQuery.event.special,
			i = 0;

		para (; (elem = elems [i])! == indefinido; i ++) {
			if (acceptData (elem)) {
				if ((data = elem [dataPriv.expando])) {
					if (data.events) {
						para (escriba data.events) {
							if (especial [tipo]) {
								jQuery.event.remove (elem, tipo);

							// Este es un atajo para evitar la sobrecarga de jQuery.event.remove
							} dem�s {
								jQuery.removeEvent (elem, tipo, data.handle);
							}
						}
					}

					// Soporte: Chrome <= 35 - 45+
					// Asignar indefinido en lugar de usar eliminar, ver Data # remove
					elem [dataPriv.expando] = indefinido;
				}
				if (elem [dataUser.expando]) {

					// Soporte: Chrome <= 35 - 45+
					// Asignar indefinido en lugar de usar eliminar, ver Data # remove
					elem [dataUser.expando] = indefinido;
				}
			}
		}
	}
});

jQuery.fn.extend ({
	separar: funci�n (selector) {
		return eliminar (esto, selector, verdadero);
	},

	eliminar: funci�n (selector) {
		volver eliminar (este, selector);
	},

	texto: funci�n (valor) {
		acceso de retorno (esto, funci�n (valor) {
			valor de retorno === indefinido?
				jQuery.text (esto):
				this.empty (). each (function () {
					if (this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9) {
						this.textContent = valor;
					}
				});
		}, nulo, valor, argumentos.longitud);
	},

	a�adir: funci�n () {
		return domManip (esto, argumentos, funci�n (elem) {
			if (this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9) {
				var target = manipulationTarget (esto, elem);
				target.appendChild (elem);
			}
		});
	},

	anteponer: function () {
		return domManip (esto, argumentos, funci�n (elem) {
			if (this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9) {
				var target = manipulationTarget (esto, elem);
				target.insertBefore (elem, target.firstChild);
			}
		});
	},

	antes: function () {
		return domManip (esto, argumentos, funci�n (elem) {
			if (this.parentNode) {
				this.parentNode.insertBefore (elem, esto);
			}
		});
	},

	despu�s: function () {
		return domManip (esto, argumentos, funci�n (elem) {
			if (this.parentNode) {
				this.parentNode.insertBefore (elem, this.nextSibling);
			}
		});
	},

	vac�o: funci�n () {
		var elem,
			i = 0;

		para (; (elem = this [i])! = null; i ++) {
			if (elem.nodeType === 1) {

				// Evita p�rdidas de memoria
				jQuery.cleanData (getAll (elem, false));

				// Elimina los nodos restantes
				elem.textContent = "";
			}
		}

		devuelve esto;
	},

	clon: function (dataAndEvents, deepDataAndEvents) {
		dataAndEvents = dataAndEvents == null? falso: dataAndEvents;
		deepDataAndEvents = deepDataAndEvents == null? dataAndEvents: deepDataAndEvents;

		devuelve this.map (function () {
			return jQuery.clone (esto, dataAndEvents, deepDataAndEvents);
		});
	},

	html: funci�n (valor) {
		acceso de retorno (esto, funci�n (valor) {
			var elem = esto [0] || {},
				i = 0,
				l = esta.longitud;

			if (valor === indefinido && elem.nodeType === 1) {
				return elem.innerHTML;
			}

			// Veamos si podemos tomar un atajo y usar innerHTML
			if (typeof value === "string" &&! rnoInnerhtml.test (value) &&
				! wrapMap [(rtagName.exec (valor) || ["", ""]) [1] .toLowerCase ()]) {

				valor = jQuery.htmlPrefilter (valor);

				intentar {
					para (; i <l; i ++) {
						elem = esto [i] || {};

						// Elimina nodos de elementos y evita p�rdidas de memoria
						if (elem.nodeType === 1) {
							jQuery.cleanData (getAll (elem, false));
							elem.innerHTML = valor;
						}
					}

					elem = 0;

				// Si el uso de innerHTML arroja una excepci�n, use el m�todo de reserva
				} atrapar (e) {}
			}

			si (elem) {
				this.empty (). append (valor);
			}
		}, nulo, valor, argumentos.longitud);
	},

	replaceWith: function () {
		var ignorado = [];

		// Realice los cambios, reemplazando cada elemento de contexto no ignorado con el nuevo contenido
		return domManip (esto, argumentos, funci�n (elem) {
			var parent = this.parentNode;

			if (jQuery.inArray (esto, ignorado) <0) {
				jQuery.cleanData (getAll (esto));
				if (padre) {
					parent.replaceChild (elem, esto);
				}
			}

		// Forzar la invocaci�n de devoluci�n de llamada
		}, ignorado);
	}
});

jQuery.each ({
	appendTo: "agregar",
	prependTo: "anteponer",
	insertBefore: "antes",
	insertAfter: "after",
	replaceAll: "replaceWith"
}, funci�n (nombre, original) {
	jQuery.fn [nombre] = funci�n (selector) {
		var elems,
			ret = [],
			insert = jQuery (selector),
			last = insert.length - 1,
			i = 0;

		para (; i <= �ltimo; i ++) {
			elems = i === �ltimo? esto: esto.clon (verdadero);
			jQuery (insertar [i]) [original] (elems);

			// Soporte: Android <= 4.0 solamente, solo PhantomJS 1
			// .get () porque push.apply (_, arraylike) arroja un WebKit antiguo
			push.apply (ret, elems.get ());
		}

		return this.pushStack (ret);
	};
});
var rnumnonpx = new RegExp ("^ (" + pnum + ") (?! px) [az%] + $", "i");

var getStyles = function (elem) {

		// Soporte: IE <= 11 solamente, Firefox <= 30 (# 15098, # 14150)
		// IE lanza elementos creados en ventanas emergentes
		// FF, mientras tanto, arroja elementos del marco a trav�s de "defaultView.getComputedStyle"
		var view = elem.ownerDocument.defaultView;

		if (! view ||! view.opener) {
			ver = ventana;
		}

		return view.getComputedStyle (elem);
	};

var swap = function (elem, options, callback) {
	var ret, nombre,
		antiguo = {};

	// Recuerda los valores antiguos e inserta los nuevos
	para (nombre en opciones) {
		antiguo [nombre] = elem.style [nombre];
		elem.style [nombre] = opciones [nombre];
	}

	ret = callback.call (elem);

	// Revertir los valores antiguos
	para (nombre en opciones) {
		elem.style [nombre] = antiguo [nombre];
	}

	return ret;
};


var rboxStyle = new RegExp (cssExpand.join ("|"), "i");



(funci�n () {

	// La ejecuci�n de las pruebas pixelPosition y boxSizingReliable solo requieren un dise�o
	// para que se ejecuten al mismo tiempo para guardar el segundo c�lculo.
	function computeStyleTests () {

		// Este es un singleton, necesitamos ejecutarlo solo una vez
		if (! div) {
			regreso;
		}

		container.style.cssText = "posici�n: absoluta; izquierda: -11111px; ancho: 60px;" +
			"margin-top: 1px; padding: 0; border: 0";
		div.style.cssText =
			"posici�n: relativa; pantalla: bloque; tama�o del cuadro: cuadro del borde; desbordamiento: desplazamiento;" +
			"margen: autom�tico; borde: 1 px; relleno: 1 px;" +
			"ancho: 60%; arriba: 1%";
		documentElement.appendChild (contenedor) .appendChild (div);

		var divStyle = window.getComputedStyle (div);
		pixelPositionVal = divStyle.top! == "1%";

		// Soporte: Android 4.0 - 4.3 solamente, Firefox <= 3-44
		confiableMarginLeftVal = roundPixelMeasures (divStyle.marginLeft) === 12;

		// Soporte: Android 4.0 - 4.3 solamente, Safari <= 9.1 - 10.1, iOS <= 7.0 - 9.3
		// Algunos estilos regresan con valores porcentuales, aunque no deber�an
		div.style.right = "60%";
		pixelBoxStylesVal = roundPixelMeasures (divStyle.right) === 36;

		// Soporte: IE 9-11 solamente
		// Detectar informes err�neos de dimensiones de contenido para tama�o de caja: elementos de caja de borde
		boxSizingReliableVal = roundPixelMeasures (divStyle.width) === 36;

		// Soporte: solo IE 9
		// Detectar desbordamiento: desorden de desplazamiento (gh-3699)
		// Soporte: Chrome <= 64
		// No se deje enga�ar cuando el zoom afecte a offsetWidth (gh-4029)
		div.style.position = "absoluto";
		scrollboxSizeVal = roundPixelMeasures (div.offsetWidth / 3) === 12;

		documentElement.removeChild (contenedor);

		// Anula el div para que no se almacene en la memoria y
		// tambi�n ser� una se�al de que las verificaciones ya se realizaron
		div = nulo;
	}

	function roundPixelMeasures (medida) {
		return Math.round (parseFloat (medida));
	}

	var pixelPositionVal, boxSizingReliableVal, scrollboxSizeVal, pixelBoxStylesVal,
		confiableTrDimensionesVal, confiableMarginLeftVal,
		contenedor = document.createElement ("div"),
		div = document.createElement ("div");

	// Termine temprano en entornos limitados (sin navegador)
	if (! div.style) {
		regreso;
	}

	// Soporte: IE <= 9 - 11 solamente
	// El estilo del elemento clonado afecta al elemento fuente clonado (# 8908)
	div.style.backgroundClip = "cuadro de contenido";
	div.cloneNode (verdadero) .style.backgroundClip = "";
	support.clearCloneStyle = div.style.backgroundClip === "cuadro de contenido";

	jQuery.extend (apoyo, {
		boxSizingReliable: function () {
			computeStyleTests ();
			return boxSizingReliableVal;
		},
		pixelBoxStyles: function () {
			computeStyleTests ();
			return pixelBoxStylesVal;
		},
		pixelPosition: function () {
			computeStyleTests ();
			return pixelPositionVal;
		},
		confiableMarginLeft: function () {
			computeStyleTests ();
			return confiableMarginLeftVal;
		},
		scrollboxSize: function () {
			computeStyleTests ();
			return scrollboxSizeVal;
		},

		// Soporte: IE 9 - 11+, Edge 15 - 18+
		// Informe err�neo de IE / Edge `getComputedStyle` de filas de tabla con ancho / alto
		// se establece en CSS mientras que las propiedades `offset *` informan los valores correctos.
		// El comportamiento en IE 9 es m�s sutil que en las versiones m�s nuevas y pasa
		// algunas versiones de esta prueba; �aseg�rate de no hacerlo pasar all�!
		//
		// Soporte: Firefox 70+
		// Solo Firefox incluye anchos de borde
		// en dimensiones calculadas. (gh-4529)
		confiablesTrDimensiones: funci�n () {
			var table, tr, trChild, trStyle;
			if (confiableTrDimensionsVal == null) {
				table = document.createElement ("tabla");
				tr = document.createElement ("tr");
				trChild = document.createElement ("div");

				table.style.cssText = "posici�n: absoluta; izquierda: -11111px; colapso de borde: separado";
				tr.style.cssText = "borde: 1px s�lido";

				// Soporte: Chrome 86+
				// La altura establecida a trav�s de cssText no se aplica.
				// La altura calculada vuelve a ser 0.
				tr.style.height = "1px";
				trChild.style.height = "9px";

				// Soporte: Android 8 Chrome 86+
				// En nuestro iframe bodyBackground.html,
				// la visualizaci�n de todos los elementos div se establece en "en l�nea",
				// que causa un problema solo en Android 8 Chrome 86.
				// Asegur�ndose de que el div se muestre: block
				// soluciona este problema.
				trChild.style.display = "bloque";

				documentElement
					.appendChild (tabla)
					.appendChild (tr)
					.appendChild (trChild);

				trStyle = window.getComputedStyle (tr);
				confiableTrDimensionesVal = (parseInt (trStyle.height, 10) +
					parseInt (trStyle.borderTopWidth, 10) +
					parseInt (trStyle.borderBottomWidth, 10)) === tr.offsetHeight;

				documentElement.removeChild (tabla);
			}
			return confiableTrDimensionsVal;
		}
	});
}) ();


funci�n curCSS (elem, nombre, calculado) {
	var width, minWidth, maxWidth, ret,

		// Soporte: Firefox 51+
		// Recuperando el estilo antes de calcularlo de alguna manera
		// soluciona un problema con la obtenci�n de valores incorrectos
		// en elementos separados
		estilo = elem.style;

	calculado = calculado || getStyles (elem);

	// getPropertyValue es necesario para:
	// .css ('filtro') (solo IE 9, # 12537)
	// .css ('- propiedad personalizada) (# 3144)
	if (calculado) {
		ret = computed.getPropertyValue (nombre) || calculado [nombre];

		if (ret === "" &&! isAttached (elem)) {
			ret = jQuery.style (elem, nombre);
		}

		// Un tributo al "incre�ble truco de Dean Edwards"
		// El navegador de Android devuelve el porcentaje de algunos valores,
		// pero el ancho parece ser p�xeles confiables.
		// Esto va en contra de la especificaci�n del borrador de CSSOM:
		// https://drafts.csswg.org/cssom/#resolved-values
		if (! support.pixelBoxStyles () && rnumnonpx.test (ret) && rboxStyle.test (nombre)) {

			// Recuerda los valores originales
			ancho = estilo.ancho;
			minWidth = style.minWidth;
			maxWidth = style.maxWidth;

			// Ingrese los nuevos valores para obtener un valor calculado
			style.minWidth = style.maxWidth = style.width = ret;
			ret = ancho calculado;

			// Revertir los valores cambiados
			style.width = ancho;
			style.minWidth = minWidth;
			style.maxWidth = maxWidth;
		}
	}

	return ret! == indefinido?

		// Soporte: IE <= 9 - 11 solamente
		// IE devuelve el valor zIndex como un n�mero entero.
		ret + "":
		retirado;
}


function addGetHookIf (conditionFn, hookFn) {

	// Defina el gancho, comprobaremos en la primera ejecuci�n si es realmente necesario.
	regreso {
		obtener: function () {
			if (conditionFn ()) {

				// Hook no es necesario (o no es posible usarlo debido
				// a la dependencia faltante), elim�nela.
				eliminar this.get;
				regreso;
			}

			// Gancho necesario; redefinirlo para que la prueba de soporte no se vuelva a ejecutar.
			return (this.get = hookFn) .apply (this, argumentos);
		}
	};
}


var cssPrefixes = ["Webkit", "Moz", "ms"],
	emptyStyle = document.createElement ("div") .style,
	vendorProps = {};

// Devuelve una propiedad con prefijo de proveedor o indefinida
function vendorPropName (nombre) {

	// Verifique los nombres con prefijo del proveedor
	var capName = nombre [0] .toUpperCase () + nombre.slice (1),
		i = cssPrefixes.length;

	mientras yo-- ) {
		nombre = cssPrefixes [i] + capName;
		if (nombre en estilo vac�o) {
			nombre de retorno;
		}
	}
}

// Devuelve una propiedad con prefijo jQuery.cssProps o proveedor potencialmente mapeada
function finalPropName (nombre) {
	var final = jQuery.cssProps [nombre] || vendorProps [nombre];

	if (final) {
		retorno final;
	}
	if (nombre en estilo vac�o) {
		nombre de retorno;
	}
	return vendorProps [nombre] = vendorPropName (nombre) || nombre;
}


var

	// Intercambiable si la pantalla no es ninguna o comienza con una tabla
	// excepto "table", "table-cell" o "table-caption"
	// Consulte aqu� los valores de visualizaci�n: https://developer.mozilla.org/en-US/docs/CSS/display
	rdisplayswap = /^(none|table(?!-c[ea]).+)/,
	rcustomProp = / ^ - /,
	cssShow = {posici�n: "absoluta", visibilidad: "oculta", pantalla: "bloque"},
	cssNormalTransform = {
		letterSpacing: "0",
		fontWeight: "400"
	};

function setPositiveNumber (_elem, value, restar) {

	// Cualquier valor relativo (+/-) ya ha sido
	// normalizado en este punto
	var coincide con rcssNum.exec (valor);
	devolver partidos?

		// Protegerse contra "restar" indefinido, por ejemplo, cuando se usa como en cssHooks
		Math.max (0, coincide con [2] - (restar || 0)) + (coincide con [3] || "px"):
		valor;
}

function boxModelAdjustment (elem, dimension, box, isBorderBox, styles, computedVal) {
	var i = dimension === "ancho"? 1: 0,
		extra = 0,
		delta = 0;

	// El ajuste puede no ser necesario
	if (box === (isBorderBox? "border": "content")) {
		return 0;
	}

	para (; i <4; i + = 2) {

		// Ambos modelos de caja excluyen el margen
		if (casilla === "margen") {
			delta + = jQuery.css (elem, caja + cssExpand [i], verdadero, estilos);
		}

		// Si llegamos aqu� con un cuadro de contenido, buscamos "relleno" o "borde" o "margen"
		if (! isBorderBox) {

			// Agregar relleno
			delta + = jQuery.css (elem, "relleno" + cssExpand [i], verdadero, estilos);

			// Para "borde" o "margen", agregue borde
			if (box! == "padding") {
				delta + = jQuery.css (elem, "borde" + cssExpand [i] + "Ancho", verdadero, estilos);

			// Pero a�n as� mant�ngalo al tanto de lo contrario
			} dem�s {
				extra + = jQuery.css (elem, "borde" + cssExpand [i] + "Ancho", verdadero, estilos);
			}

		// Si llegamos aqu� con un cuadro de borde (contenido + relleno + borde), estamos buscando "contenido" o
		// "relleno" o "margen"
		} dem�s {

			// Para "contenido", reste el relleno
			if (casilla === "contenido") {
				delta - = jQuery.css (elem, "relleno" + cssExpand [i], verdadero, estilos);
			}

			// Para "contenido" o "relleno", resta el borde
			if (box! == "margin") {
				delta - = jQuery.css (elem, "borde" + cssExpand [i] + "Ancho", verdadero, estilos);
			}
		}
	}

	// Tenga en cuenta el margen de desplazamiento del cuadro de contenido positivo cuando se solicite proporcionando computedVal
	if (! isBorderBox && computedVal> = 0) {

		// offsetWidth / offsetHeight es una suma redondeada de contenido, relleno, margen de desplazamiento y borde
		// Suponiendo un margen de desplazamiento de n�meros enteros, reste el resto y redondee hacia abajo
		delta + = Math.max (0, Math.ceil (
			elem ["desplazamiento" + dimensi�n [0] .toUpperCase () + dimension.slice (1)] -
			computedVal -
			delta -
			extra -
			0,5

		// Si se desconoce offsetWidth / offsetHeight, entonces no podemos determinar el margen de desplazamiento del cuadro de contenido
		// Usa un cero expl�cito para evitar NaN (gh-3964)
		)) || 0;
	}

	return delta;
}

function getWidthOrHeight (elem, dimension, extra) {

	// Empezar con estilo calculado
	var styles = getStyles (elem),

		// Para evitar forzar un reflujo, solo busca boxSizing si lo necesitamos (gh-4322).
		// Cuadro de contenido falso hasta que sepamos que es necesario para conocer el valor real.
		boxSizingNeeded =! support.boxSizingReliable () || extra,
		isBorderBox = boxSizingNeeded &&
			jQuery.css (elem, "boxSizing", false, styles) === "border-box",
		valueIsBorderBox = isBorderBox,

		val = curCSS (elem, dimensi�n, estilos),
		offsetProp = "offset" + dimensi�n [0] .toUpperCase () + dimension.slice (1);

	// Soporte: Firefox <= 54
	// Devuelve un valor confuso que no sea de p�xeles o finge ignorancia, seg�n corresponda.
	if (rnumnonpx.test (val)) {
		if (! extra) {
			return val;
		}
		val = "auto";
	}


	// Soporte: IE 9-11 solamente
	// Use offsetWidth / offsetHeight cuando el tama�o de la caja no sea confiable.
	// En esos casos, se puede confiar en que el valor calculado sea border-box.
	if ((! support.boxSizingReliable () && isBorderBox ||

		// Soporte: IE 10 - 11+, Edge 15 - 18+
		// Informe err�neo de IE / Edge `getComputedStyle` de filas de tabla con ancho / alto
		// se establece en CSS mientras que las propiedades `offset *` informan los valores correctos.
		// Curiosamente, en algunos casos, IE 9 no sufre este problema.
		! support.reliableTrDimensions () && nodeName (elem, "tr") ||

		// Volver a offsetWidth / offsetHeight cuando el valor es "auto"
		// Esto sucede para elementos en l�nea sin una configuraci�n expl�cita (gh-3571)
		val === "auto" ||

		// Soporte: Android <= 4.1 - 4.3 solamente
		// Tambi�n use offsetWidth / offsetHeight para las dimensiones en l�nea mal informadas (gh-3602)
		! parseFloat (val) && jQuery.css (elem, "display", false, styles) === "en l�nea") &&

		// Aseg�rate de que el elemento est� visible y conectado
		elem.getClientRects (). length) {

		isBorderBox = jQuery.css (elem, "boxSizing", false, styles) === "border-box";

		// Donde est� disponible, offsetWidth / offsetHeight dimensiones aproximadas de la caja del borde.
		// Donde no est� disponible (por ejemplo, SVG), suponga un tama�o de caja poco confiable e interprete el
		// valor recuperado como dimensi�n del cuadro de contenido.
		valueIsBorderBox = offsetProp in elem;
		if (valueIsBorderBox) {
			val = elem [offsetProp];
		}
	}

	// Normalizar "" y auto
	val = parseFloat (val) || 0;

	// Ajuste para el modelo de caja del elemento
	retorno (val +
		boxModelAdjustment (
			elem,
			dimensi�n,
			extra || (isBorderBox? "border": "content"),
			valueIsBorderBox,
			estilos

			// Proporcione el tama�o calculado actual para solicitar el c�lculo del margen de desplazamiento (gh-3589)
			val
		)
	) + "px";
}

jQuery.extend ({

	// Agrega ganchos de propiedad de estilo para anular el valor predeterminado
	// comportamiento de obtener y establecer una propiedad de estilo
	cssHooks: {
		opacidad: {
			obtener: funci�n (elem, calculado) {
				if (calculado) {

					// Siempre debemos recuperar un n�mero de la opacidad
					var ret = curCSS (elem, "opacidad");
					return ret === ""? "1": ret;
				}
			}
		}
	},

	// No agregue autom�ticamente "px" a estas propiedades posiblemente sin unidades
	cssNumber: {
		"animationIterationCount": verdadero,
		"columnCount": verdadero,
		"fillOpacity": verdadero,
		"flexGrow": verdadero,
		"flexShrink": verdadero,
		"fontWeight": verdadero,
		"gridArea": ??verdadero,
		"gridColumn": verdadero,
		"gridColumnEnd": verdadero,
		"gridColumnStart": verdadero,
		"gridRow": verdadero,
		"gridRowEnd": verdadero,
		"gridRowStart": verdadero,
		"lineHeight": verdadero,
		"opacidad": verdadero,
		"orden": verdadero,
		"hu�rfanos": cierto,
		"viudas": cierto,
		"zIndex": verdadero,
		"zoom": verdadero
	},

	// Agregue propiedades cuyos nombres desea corregir antes
	// establecer u obtener el valor
	cssProps: {},

	// Obtener y establecer la propiedad de estilo en un nodo DOM
	estilo: funci�n (elem, nombre, valor, extra) {

		// No establezca estilos en los nodos de texto y comentarios
		if (! elem || elem.nodeType === 3 || elem.nodeType === 8 ||! elem.style) {
			regreso;
		}

		// Aseg�rate de que estamos trabajando con el nombre correcto
		var ret, tipo, ganchos,
			origName = camelCase (nombre),
			isCustomProp = rcustomProp.test (nombre),
			estilo = elem.style;

		// Aseg�rate de que estamos trabajando con el nombre correcto. Nosotros no
		// desea consultar el valor si es una propiedad personalizada de CSS
		// ya que est�n definidos por el usuario.
		if (! isCustomProp) {
			nombre = finalPropName (origName);
		}

		// Obtiene el gancho para la versi�n con prefijo, luego la versi�n sin prefijo
		hooks = jQuery.cssHooks [nombre] || jQuery.cssHooks [origName];

		// Verifica si estamos configurando un valor
		si (valor! == indefinido) {
			tipo = tipo de valor;

			// Convertir "+ =" o "- =" a n�meros relativos (# 7345)
			if (escriba === "cadena" && (ret = rcssNum.exec (valor)) && ret [1]) {
				valor = ajustarCSS (elem, nombre, ret);

				// Corrige el error # 9237
				tipo = "n�mero";
			}

			// Aseg�rese de que los valores nulos y NaN no est�n configurados (# 7116)
			si (valor == nulo || valor! == valor) {
				regreso;
			}

			// Si se pas� un n�mero, agregue la unidad (excepto para ciertas propiedades CSS)
			// La verificaci�n isCustomProp se puede eliminar en jQuery 4.0 cuando solo agregamos autom�ticamente
			// "px" a algunos valores codificados.
			if (escriba === "n�mero" &&! isCustomProp) {
				valor + = ret && ret [3] || (jQuery.cssNumber [origName]? "": "px");
			}

			// background- * los accesorios afectan los valores del clon original
			if (! support.clearCloneStyle && value === "" && name.indexOf ("background") === 0) {
				estilo [nombre] = "heredar";
			}

			// Si se proporcion� un gancho, use ese valor; de lo contrario, simplemente establezca el valor especificado
			if (! hooks ||! ("set" in hooks) ||
				(valor = hooks.set (elem, valor, extra))! == indefinido) {

				if (isCustomProp) {
					style.setProperty (nombre, valor);
				} dem�s {
					estilo [nombre] = valor;
				}
			}

		} dem�s {

			// Si se proporcion� un gancho, obtenga el valor no calculado de all�
			if (hooks && "get" in hooks &&
				(ret = hooks.get (elem, false, extra))! == indefinido) {

				return ret;
			}

			// De lo contrario, obtenga el valor del objeto de estilo
			estilo de retorno [nombre];
		}
	},

	css: function (elem, name, extra, styles) {
		var val, num, ganchos,
			origName = camelCase (nombre),
			isCustomProp = rcustomProp.test (nombre);

		// Aseg�rate de que estamos trabajando con el nombre correcto. Nosotros no
		// desea modificar el valor si es una propiedad personalizada de CSS
		// ya que est�n definidos por el usuario.
		if (! isCustomProp) {
			nombre = finalPropName (origName);
		}

		// Pruebe el nombre con prefijo seguido del nombre sin prefijo
		hooks = jQuery.cssHooks [nombre] || jQuery.cssHooks [origName];

		// Si se proporcion� un gancho, obtenga el valor calculado desde all�
		if (hooks && "get" in hooks) {
			val = hooks.get (elem, true, extra);
		}

		// De lo contrario, si existe una forma de obtener el valor calculado, utilice ese
		if (val === undefined) {
			val = curCSS (elem, nombre, estilos);
		}

		// Convertir "normal" en valor calculado
		if (val === "normal" && nombre en cssNormalTransform) {
			val = cssNormalTransform [nombre];
		}

		// Hacer num�rico si se proporcion� un calificador o forzado y val parece num�rico
		if (extra === "" || extra) {
			num = parseFloat (val);
			devuelve extra === verdadero || isFinite (num)? num || 0: val;
		}

		return val;
	}
});

jQuery.each (["altura", "ancho"], funci�n (_i, dimensi�n) {
	jQuery.cssHooks [dimensi�n] = {
		get: function (elem, computed, extra) {
			if (calculado) {

				// Ciertos elementos pueden tener informaci�n de dimensi�n si los mostramos de manera invisible
				// pero debe tener un estilo de visualizaci�n actual que se beneficie
				return rdisplayswap.test (jQuery.css (elem, "display")) &&

					// Soporte: Safari 8+
					// Las columnas de la tabla en Safari tienen un offsetWidth distinto de cero y cero
					// getBoundingClientRect (). width a menos que se cambie la visualizaci�n.
					// Soporte: IE <= 11 solamente
					// Ejecutando getBoundingClientRect en un nodo desconectado
					// en IE arroja un error.
					(! elem.getClientRects (). longitud ||! elem.getBoundingClientRect (). ancho)?
					swap (elem, cssShow, function () {
						return getWidthOrHeight (elem, dimensi�n, extra);
					}):
					getWidthOrHeight (elem, dimensi�n, extra);
			}
		},

		set: function (elem, value, extra) {
			var coincide,
				styles = getStyles (elem),

				// Solo lee styles.position si la prueba tiene la posibilidad de fallar
				// para evitar forzar un reflujo.
				scrollboxSizeBuggy =! support.scrollboxSize () &&
					styles.position === "absoluto",

				// Para evitar forzar un reflujo, solo busque boxSizing si lo necesitamos (gh-3991)
				boxSizingNeeded = scrollboxSizeBuggy || extra,
				isBorderBox = boxSizingNeeded &&
					jQuery.css (elem, "boxSizing", false, styles) === "border-box",
				restar = extra?
					boxModelAdjustment (
						elem,
						dimensi�n,
						extra,
						isBorderBox,
						estilos
					):
					0;

			// Considere las dimensiones del cuadro de borde no confiables comparando el desplazamiento * con el calculado y
			// falsificar un cuadro de contenido para obtener borde y relleno (gh-3699)
			if (isBorderBox && scrollboxSizeBuggy) {
				restar - = Math.ceil (
					elem ["desplazamiento" + dimensi�n [0] .toUpperCase () + dimension.slice (1)] -
					parseFloat (estilos [dimensi�n]) -
					boxModelAdjustment (elemento, dimensi�n, "borde", falso, estilos) -
					0,5
				);
			}

			// Convertir a p�xeles si es necesario ajustar el valor
			if (restar && (coincide con rcssNum.exec (valor)) &&
				(coincide con [3] || "px")! == "px") {

				elem.style [dimensi�n] = valor;
				valor = jQuery.css (elem, dimensi�n);
			}

			return setPositiveNumber (elem, valor, restar);
		}
	};
});

jQuery.cssHooks.marginLeft = addGetHookIf (support.reliableMarginLeft,
	function (elem, calculado) {
		if (calculado) {
			return (parseFloat (curCSS (elem, "marginLeft")) ||
				elem.getBoundingClientRect (). izquierda -
					swap (elem, {marginLeft: 0}, function () {
						return elem.getBoundingClientRect (). left;
					})
			) + "px";
		}
	}
);

// Estos ganchos son utilizados por animate para expandir propiedades
jQuery.each ({
	margen: "",
	relleno: "",
	ancho del borde"
}, funci�n (prefijo, sufijo) {
	jQuery.cssHooks [prefijo + sufijo] = {
		expandir: funci�n (valor) {
			var i = 0,
				expandido = {},

				// Asume un solo n�mero si no una cadena
				partes = tipo de valor === "cadena"? value.split (""): [valor];

			para (; i <4; i ++) {
				expandido [prefijo + cssExpand [i] + sufijo] =
					partes [i] || partes [i - 2] || partes [0];
			}

			retorno expandido;
		}
	};

	if (prefijo! == "margen") {
		jQuery.cssHooks [prefijo + sufijo] .set = setPositiveNumber;
	}
});

jQuery.fn.extend ({
	css: function (nombre, valor) {
		acceso de retorno (esto, funci�n (elem, nombre, valor) {
			var estilos, len,
				mapa = {},
				i = 0;

			if (Array.isArray (nombre)) {
				estilos = getStyles (elem);
				len = name.length;

				para (; i <len; i ++) {
					mapa [nombre [i]] = jQuery.css (elem, nombre [i], falso, estilos);
				}

				mapa de retorno;
			}

			valor de retorno! == indefinido?
				jQuery.style (elemento, nombre, valor):
				jQuery.css (elem, nombre);
		}, nombre, valor, argumentos.longitud> 1);
	}
});


function Tween (elem, options, prop, end, easing) {
	return new Tween.prototype.init (elem, options, prop, end, easing);
}
jQuery.Tween = Tween;

Tween.prototype = {
	constructor: Tween,
	init: function (elem, options, prop, end, easing, unit) {
		this.elem = elem;
		this.prop = prop;
		this.easing = suavizando || jQuery.easing._default;
		this.options = opciones;
		this.start = this.now = this.cur ();
		this.end = fin;
		this.unit = unidad || (jQuery.cssNumber [prop]? "": "px");
	},
	cur: function () {
		var hooks = Tween.propHooks [this.prop];

		devolver ganchos && hooks.get?
			hooks.get (esto):
			Tween.propHooks._default.get (esto);
	},
	ejecutar: funci�n (porcentaje) {
		var aliviado,
			ganchos = Tween.propHooks [this.prop];

		if (this.options.duration) {
			this.pos = eased = jQuery.easing [this.easing] (
				percent, this.options.duration * percent, 0, 1, this.options.duration
			);
		} dem�s {
			this.pos = facilitado = porcentaje;
		}
		this.now = (this.end - this.start) * eased + this.start;

		if (this.options.step) {
			this.options.step.call (this.elem, this.now, this);
		}

		if (ganchos && hooks.set) {
			hooks.set (esto);
		} dem�s {
			Tween.propHooks._default.set (esto);
		}
		devuelve esto;
	}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
	_defecto: {
		obtener: funci�n (interpolaci�n) {
			var result;

			// Usa una propiedad en el elemento directamente cuando no es un elemento DOM,
			// o cuando no existe una propiedad de estilo coincidente.
			if (tween.elem.nodeType! == 1 ||
				tween.elem [tween.prop]! = null && tween.elem.style [tween.prop] == null) {
				return tween.elem [tween.prop];
			}

			// Pasar una cadena vac�a como tercer par�metro a .css autom�ticamente
			// intenta parseFloat y recurre a una cadena si el an�lisis falla.
			// Los valores simples como "10px" se analizan en Float;
			// Los valores complejos como "rotate (1rad)" se devuelven tal cual.
			resultado = jQuery.css (tween.elem, tween.prop, "");

			// Las cadenas vac�as, nulas, indefinidas y "auto" se convierten a 0.
			retorno! resultado || resultado === "auto"? 0: resultado;
		},
		set: function (interpolaci�n) {

			// Utilice el gancho de paso para compatibilidad trasera.
			// Usa cssHook si est� ah�.
			// Use .style si est� disponible y use propiedades simples cuando est�n disponibles.
			if (jQuery.fx.step [tween.prop]) {
				jQuery.fx.step [interpolaci�n.prop] (interpolaci�n);
			} else if (tween.elem.nodeType === 1 && (
				jQuery.cssHooks [tween.prop] ||
					tween.elem.style [finalPropName (tween.prop)]! = null)) {
				jQuery.style (tween.elem, tween.prop, tween.now + tween.unit);
			} dem�s {
				tween.elem [tween.prop] = tween.now;
			}
		}
	}
};

// Soporte: IE <= 9 solamente
// Enfoque basado en p�nico para configurar cosas en nodos desconectados
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
	set: function (interpolaci�n) {
		if (tween.elem.nodeType && tween.elem.parentNode) {
			tween.elem [tween.prop] = tween.now;
		}
	}
};

jQuery.easing = {
	lineal: funci�n (p) {
		return p;
	},
	swing: function (p) {
		return 0.5 - Math.cos (p * Math.PI) / 2;
	},
	_default: "swing"
};

jQuery.fx = Tween.prototype.init;

// Back compat <1.8 punto de extensi�n
jQuery.fx.step = {};




var
	fxNow, inProgress,
	rfxtypes = / ^ (?: alternar | mostrar | ocultar) $ /,
	rrun = / queueHooks $ /;

funci�n horario () {
	if (inProgress) {
		if (document.hidden === false && window.requestAnimationFrame) {
			window.requestAnimationFrame (horario);
		} dem�s {
			window.setTimeout (horario, jQuery.fx.interval);
		}

		jQuery.fx.tick ();
	}
}

// Las animaciones creadas sincr�nicamente se ejecutar�n sincr�nicamente
function createFxNow () {
	window.setTimeout (function () {
		fxNow = indefinido;
	});
	return (fxNow = Date.now ());
}

// Genera par�metros para crear una animaci�n est�ndar
function genFx (type, includeWidth) {
	var que,
		i = 0,
		attrs = {altura: tipo};

	// Si incluimos el ancho, el valor del paso es 1 para hacer todos los valores cssExpand,
	// de lo contrario, el valor del paso es 2 para omitir la izquierda y la derecha
	includeWidth = includeWidth? 1: 0;
	para (; i <4; i + = 2 - includeWidth) {
		que = cssExpand [i];
		attrs ["margin" + which] = attrs ["padding" + which] = type;
	}

	if (includeWidth) {
		attrs.opacity = attrs.width = tipo;
	}

	return attrs;
}

funci�n createTween (valor, prop, animaci�n) {
	var interpolaci�n,
		colecci�n = (Animation.tweeners [prop] || []) .concat (Animation.tweeners ["*"]),
		�ndice = 0,
		length = collection.length;
	para (; �ndice <longitud; �ndice ++) {
		if ((interpolaci�n = colecci�n [�ndice] .call (animaci�n, prop, valor))) {

			// Hemos terminado con esta propiedad
			return interpolaci�n;
		}
	}
}

function defaultPrefilter (elem, props, opts) {
	var prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
		isBox = "ancho" en accesorios || "altura" en accesorios,
		anim = esto,
		orig = {},
		estilo = elem.style,
		hidden = elem.nodeType && isHiddenWithinTree (elem),
		dataShow = dataPriv.get (elem, "fxshow");

	// Las animaciones de salto de cola secuestran los ganchos fx
	if (! opts.queue) {
		ganchos = jQuery._queueHooks (elem, "fx");
		if (hooks.unqueued == null) {
			hooks.unqueued = 0;
			fuego viejo = hooks.empty.fire;
			hooks.empty.fire = function () {
				if (! hooks.unqueued) {
					fuego viejo ();
				}
			};
		}
		hooks.unqueued ++;

		anim.always (function () {

			// Aseg�rese de que se llame al controlador completo antes de que se complete
			anim.always (function () {
				hooks.unqueued--;
				if (! jQuery.queue (elem, "fx") .length) {
					hooks.empty.fire ();
				}
			});
		});
	}

	// Detectar mostrar / ocultar animaciones
	for (prop en props) {
		valor = props [prop];
		if (rfxtypes.test (valor)) {
			eliminar accesorios [prop];
			alternar = alternar || valor === "alternar";
			if (valor === (�oculto? "ocultar": "mostrar")) {

				// Finge estar oculto si se trata de un "espect�culo" y
				// todav�a hay datos de un show / hide detenido
				if (value === "show" && dataShow && dataShow [prop]! == undefined) {
					oculto = verdadero;

				// Ignora todos los dem�s datos de mostrar / ocultar no operativos
				} dem�s {
					Seguir;
				}
			}
			orig [prop] = dataShow && dataShow [prop] || jQuery.style (elem, prop);
		}
	}

	// Rescatar si se trata de una operaci�n no operativa como .hide (). Hide ()
	propTween =! jQuery.isEmptyObject (props);
	if (! propTween && jQuery.isEmptyObject (orig)) {
		regreso;
	}

	// Restringir los estilos de "desbordamiento" y "visualizaci�n" durante las animaciones de cuadro
	if (isBox && elem.nodeType === 1) {

		// Soporte: IE <= 9-11, Edge 12-15
		// Registra los 3 atributos de desbordamiento porque IE no infiere la taquigraf�a
		// de overflowX y overflowY con valores id�nticos y Edge solo refleja
		// el valor overflowX all�.
		opts.overflow = [style.overflow, style.overflowX, style.overflowY];

		// Identifique un tipo de visualizaci�n, prefiriendo mostrar / ocultar datos antiguos sobre la cascada de CSS
		restoreDisplay = dataShow && dataShow.display;
		if (restoreDisplay == null) {
			restoreDisplay = dataPriv.get (elem, "pantalla");
		}
		display = jQuery.css (elem, "display");
		si (mostrar === "ninguno") {
			if (restoreDisplay) {
				display = restoreDisplay;
			} dem�s {

				// Obtener valor (es) no vac�o forzando temporalmente la visibilidad
				showHide ([elem], verdadero);
				restoreDisplay = elem.style.display || restoreDisplay;
				display = jQuery.css (elem, "display");
				showHide ([elem]);
			}
		}

		// Animar elementos en l�nea como bloque en l�nea
		if (display === "inline" || display === "inline-block" && restoreDisplay! = null) {
			if (jQuery.css (elem, "float") === "none") {

				// Restaurar el valor de visualizaci�n original al final de las animaciones de mostrar / ocultar puras
				if (! propTween) {
					anim.done (function () {
						style.display = restoreDisplay;
					});
					if (restoreDisplay == null) {
						display = style.display;
						restoreDisplay = display === "none"? "" : monitor;
					}
				}
				style.display = "bloque en l�nea";
			}
		}
	}

	if (opts.overflow) {
		style.overflow = "oculto";
		anim.always (function () {
			style.overflow = opts.overflow [0];
			style.overflowX = opts.overflow [1];
			style.overflowY = opts.overflow [2];
		});
	}

	// Implementar mostrar / ocultar animaciones
	propTween = falso;
	para (prop en orig) {

		// Configuraci�n general para mostrar / ocultar la animaci�n de este elemento
		if (! propTween) {
			if (dataShow) {
				if ("oculto" en dataShow) {
					hidden = dataShow.hidden;
				}
			} dem�s {
				dataShow = dataPriv.access (elem, "fxshow", {display: restoreDisplay});
			}

			// Almacenar oculto / visible para alternar de modo que `.stop (). Toggle ()` "invierte"
			if (alternar) {
				dataShow.hidden =! hidden;
			}

			// Mostrar elementos antes de animarlos
			si (oculto) {
				showHide ([elem], verdadero);
			}

			/ * eslint-disable no-loop-func * /

			anim.done (function () {

				/ * eslint-enable no-loop-func * /

				// El paso final de una animaci�n "ocultar" es en realidad ocultar el elemento
				if (! hidden) {
					showHide ([elem]);
				}
				dataPriv.remove (elem, "fxshow");
				para (prop en orig) {
					jQuery.style (elem, prop, orig [prop]);
				}
			});
		}

		// Configuraci�n por propiedad
		propTween = createTween (�oculto? dataShow [prop]: 0, prop, anim);
		if (! (prop en dataShow)) {
			dataShow [prop] = propTween.start;
			si (oculto) {
				propTween.end = propTween.start;
				propTween.start = 0;
			}
		}
	}
}

function propFilter (props, specialEasing) {
	var index, name, easing, value, hooks;

	// camelCase, specialEasing y expand cssHook pass
	para (�ndice en accesorios) {
		nombre = camelCase (�ndice);
		easing = specialEasing [nombre];
		valor = props [�ndice];
		if (Array.isArray (valor)) {
			easing = value [1];
			valor = props [�ndice] = valor [0];
		}

		if (�ndice! == nombre) {
			props [nombre] = valor;
			eliminar accesorios [�ndice];
		}

		hooks = jQuery.cssHooks [nombre];
		if (ganchos && "expandir" en ganchos) {
			valor = hooks.expand (valor);
			eliminar accesorios [nombre];

			// No del todo $ .extend, esto no sobrescribir� las claves existentes.
			// Reutilizando '�ndice' porque tenemos el "nombre" correcto
			para (�ndice en valor) {
				if (! (index in props)) {
					props [�ndice] = valor [�ndice];
					specialEasing [�ndice] = suavizado;
				}
			}
		} dem�s {
			specialEasing [nombre] = suavizado;
		}
	}
}

funci�n Animaci�n (elem, propiedades, opciones) {
	resultado var,
		detenido,
		�ndice = 0,
		length = Animation.prefilters.length,
		diferido = jQuery.Deferred (). always (function () {

			// No coincida con elem en el selector animado
			eliminar tick.elem;
		}),
		tick = function () {
			if (detenido) {
				falso retorno;
			}
			var currentTime = fxNow || createFxNow (),
				restante = Math.max (0, animation.startTime + animation.duration - currentTime),

				// Soporte: solo Android 2.3
				// Error de bloqueo arcaico no nos permitir� usar `1 - (0.5 || 0)` (# 12497)
				temp = restante / animation.duration || 0,
				porcentaje = 1 - temp,
				�ndice = 0,
				length = animation.tweens.length;

			para (; �ndice <longitud; �ndice ++) {
				animation.tweens [�ndice] .run (porcentaje);
			}

			deferred.notifyWith (elem, [animaci�n, porcentaje, restante]);

			// Si hay m�s por hacer, cede
			si (porcentaje <1 && longitud) {
				retorno restante;
			}

			// Si se trataba de una animaci�n vac�a, sintetiza una notificaci�n de progreso final
			if (! length) {
				deferred.notifyWith (elem, [animation, 1, 0]);
			}

			// Resuelve la animaci�n e informa su conclusi�n
			deferred.resolveWith (elem, [animaci�n]);
			falso retorno;
		},
		animation = deferred.promise ({
			elem: elem,
			accesorios: jQuery.extend ({}, propiedades),
			opts: jQuery.extend (verdadero, {
				specialEasing: {},
				easing: jQuery.easing._default
			}, opciones),
			originalProperties: propiedades,
			originalOptions: opciones,
			startTime: fxNow || createFxNow (),
			duraci�n: opciones.duraci�n,
			preadolescentes: [],
			createTween: function (prop, end) {
				var tween = jQuery.Tween (elem, animation.opts, prop, end,
					animation.opts.specialEasing [prop] || animation.opts.easing);
				animation.tweens.push (interpolaci�n);
				return interpolaci�n;
			},
			detener: funci�n (gotoEnd) {
				var index = 0,

					// Si vamos al final, queremos ejecutar todos los preadolescentes
					// de lo contrario, saltamos esta parte
					length = gotoEnd? animation.tweens.length: 0;
				if (detenido) {
					devuelve esto;
				}
				detenido = verdadero;
				para (; �ndice <longitud; �ndice ++) {
					animation.tweens [�ndice] .run (1);
				}

				// Resolver cuando jugamos el �ltimo fotograma; de lo contrario, rechazar
				if (gotoEnd) {
					deferred.notifyWith (elem, [animation, 1, 0]);
					deferred.resolveWith (elem, [animation, gotoEnd]);
				} dem�s {
					deferred.rejectWith (elem, [animation, gotoEnd]);
				}
				devuelve esto;
			}
		}),
		props = animation.props;

	propFilter (props, animation.opts.specialEasing);

	para (; �ndice <longitud; �ndice ++) {
		resultado = Animation.prefilters [index] .call (animation, elem, props, animation.opts);
		if (resultado) {
			if (isFunction (result.stop)) {
				jQuery._queueHooks (animation.elem, animation.opts.queue) .stop =
					result.stop.bind (resultado);
			}
			devolver resultado;
		}
	}

	jQuery.map (props, createTween, animaci�n);

	if (isFunction (animation.opts.start)) {
		animation.opts.start.call (elem, animaci�n);
	}

	// Adjuntar devoluciones de llamada de opciones
	animaci�n
		.progreso (animation.opts.progress)
		.done (animation.opts.done, animation.opts.complete)
		.fail (animaci�n.opts.fail)
		.always (animation.opts.always);

	jQuery.fx.timer (
		jQuery.extend (marca, {
			elem: elem,
			anim: animaci�n,
			cola: animation.opts.queue
		})
	);

	retorno de la animaci�n;
}

jQuery.Animation = jQuery.extend (Animaci�n, {

	tweeners: {
		"*": [funci�n (prop, valor) {
			var tween = this.createTween (prop, valor);
			ajustarCSS (interpolaci�n.elem, prop, rcssNum.exec (valor), interpolaci�n);
			return interpolaci�n;
		}]
	},

	tweener: function (props, callback) {
		if (isFunction (props)) {
			devoluci�n de llamada = props;
			props = ["*"];
		} dem�s {
			props = props.match (rnothtmlwhite);
		}

		var prop,
			�ndice = 0,
			length = props.length;

		para (; �ndice <longitud; �ndice ++) {
			prop = props [�ndice];
			Animation.tweeners [prop] = Animation.tweeners [prop] || [];
			Animation.tweeners [prop] .unshift (devoluci�n de llamada);
		}
	},

	prefiltros: [defaultPrefilter],

	prefiltro: funci�n (devoluci�n de llamada, anteponer) {
		if (anteponer) {
			Animation.prefilters.unshift (devoluci�n de llamada);
		} dem�s {
			Animation.prefilters.push (devoluci�n de llamada);
		}
	}
});

jQuery.speed = function (speed, easing, fn) {
	var opt = velocidad && tipo de velocidad === "objeto"? jQuery.extend ({}, velocidad): {
		completo: fn || ! fn && easing ||
			isFunction (velocidad) && velocidad,
		duraci�n: velocidad,
		facilitaci�n: fn && facilitaci�n || suavizar &&! isFunction (suavizar) && suavizar
	};

	// Ir al estado final si fx est�n desactivados
	if (jQuery.fx.off) {
		opt.duration = 0;

	} dem�s {
		if (typeof opt.duration! == "number") {
			if (opt.duration en jQuery.fx.speeds) {
				opt.duration = jQuery.fx.speeds [opt.duration];

			} dem�s {
				opt.duration = jQuery.fx.speeds._default;
			}
		}
	}

	// Normalizar opt.queue - verdadero / indefinido / nulo -> "fx"
	if (opt.queue == null || opt.queue === true) {
		opt.queue = "fx";
	}

	// Cola
	opt.old = opt.complete;

	opt.complete = function () {
		if (isFunction (opt.old)) {
			opt.old.call (esto);
		}

		if (opt.queue) {
			jQuery.dequeue (esto, opt.queue);
		}
	};

	return opt;
};

jQuery.fn.extend ({
	fadeTo: function (speed, to, easing, callback) {

		// Muestra los elementos ocultos despu�s de establecer la opacidad en 0
		devuelve this.filter (isHiddenWithinTree) .css ("opacidad", 0) .show ()

			// Animar al valor especificado
			.end (). animate ({opacidad: a}, velocidad, suavizado, devoluci�n de llamada);
	},
	animate: function (prop, speed, easing, callback) {
		var vac�o = jQuery.isEmptyObject (prop),
			optall = jQuery.speed (velocidad, aceleraci�n, devoluci�n de llamada),
			doAnimation = function () {

				// Opere en una copia de la propiedad para que no se pierda la relajaci�n por propiedad
				var anim = Animaci�n (esto, jQuery.extend ({}, prop), optall);

				// Las animaciones vac�as o el acabado se resuelve inmediatamente
				if (vac�o || dataPriv.get (esto, "terminar")) {
					anim.stop (verdadero);
				}
			};

		doAnimation.finish = doAnimation;

		volver vac�o || optall.queue === falso?
			this.each (doAnimation):
			this.queue (optall.queue, doAnimation);
	},
	detener: funci�n (tipo, clearQueue, gotoEnd) {
		var stopQueue = function (hooks) {
			var stop = hooks.stop;
			eliminar hooks.stop;
			detener (gotoEnd);
		};

		if (typeof type! == "string") {
			gotoEnd = clearQueue;
			clearQueue = tipo;
			tipo = indefinido;
		}
		if (clearQueue) {
			this.queue (tipo || "fx", []);
		}

		devuelve this.each (function () {
			var dequeue = true,
				index = type! = null && type + "queueHooks",
				temporizadores = jQuery.timers,
				data = dataPriv.get (esto);

			if (�ndice) {
				if (datos [�ndice] && datos [�ndice] .stop) {
					stopQueue (datos [�ndice]);
				}
			} dem�s {
				para (�ndice en datos) {
					if (datos [�ndice] && datos [�ndice] .stop && rrun.test (�ndice)) {
						stopQueue (datos [�ndice]);
					}
				}
			}

			for (index = timers.length; index--;) {
				if (temporizadores [�ndice] .elem === esto &&
					(tipo == nulo || temporizadores [�ndice] .queue === tipo)) {

					temporizadores [�ndice] .anim.stop (gotoEnd);
					dequeue = falso;
					timers.splice (�ndice, 1);
				}
			}

			// Iniciar el siguiente en la cola si el �ltimo paso no fue forzado.
			// Los temporizadores actualmente llamar�n a sus devoluciones de llamada completas, que
			// se retirar� de la cola, pero solo si fueron gotoEnd.
			if (quitar de la cola ||! gotoEnd) {
				jQuery.dequeue (este, tipo);
			}
		});
	},
	fin: funci�n (tipo) {
		if (escriba! == falso) {
			tipo = tipo || "fx";
		}
		devuelve this.each (function () {
			�ndice var,
				data = dataPriv.get (esto),
				cola = datos [tipo + "cola"],
				ganchos = datos [tipo + "queueHooks"],
				temporizadores = jQuery.timers,
				longitud = cola? queue.length: 0;

			// Habilitar marca de finalizaci�n en datos privados
			data.finish = verdadero;

			// Vac�a la cola primero
			jQuery.queue (este, tipo, []);

			if (ganchos && hooks.stop) {
				hooks.stop.call (esto, verdadero);
			}

			// Busque las animaciones activas y term�nelas
			for (index = timers.length; index--;) {
				if (temporizadores [�ndice] .elem === este && temporizadores [�ndice]. cola === tipo) {
					temporizadores [�ndice] .anim.stop (verdadero);
					timers.splice (�ndice, 1);
				}
			}

			// Busque las animaciones en la cola anterior y term�nelas
			para (�ndice = 0; �ndice <longitud; �ndice ++) {
				if (cola [�ndice] && cola [�ndice] .finish) {
					cola [�ndice] .finish.call (esto);
				}
			}

			// Apagar la bandera de finalizaci�n
			eliminar data.finish;
		});
	}
});

jQuery.each (["alternar", "mostrar", "ocultar"], funci�n (_i, nombre) {
	var cssFn = jQuery.fn [nombre];
	jQuery.fn [nombre] = funci�n (velocidad, aceleraci�n, devoluci�n de llamada) {
		velocidad de retorno == nulo || typeof speed === "boolean"?
			cssFn.apply (esto, argumentos):
			this.animate (genFx (nombre, verdadero), velocidad, aceleraci�n, devoluci�n de llamada);
	};
});

// Genera atajos para animaciones personalizadas
jQuery.each ({
	slideDown: genFx ("mostrar"),
	slideUp: genFx ("ocultar"),
	slideToggle: genFx ("alternar"),
	fadeIn: {opacity: "show"},
	fadeOut: {opacidad: "ocultar"},
	fadeToggle: {opacity: "toggle"}
}, funci�n (nombre, accesorios) {
	jQuery.fn [nombre] = funci�n (velocidad, aceleraci�n, devoluci�n de llamada) {
		return this.animate (props, speed, easing, callback);
	};
});

jQuery.timers = [];
jQuery.fx.tick = function () {
	var temporizador,
		i = 0,
		temporizadores = jQuery.timers;

	fxNow = Date.now ();

	para (; i <timers.length; i ++) {
		temporizador = temporizadores [i];

		// Ejecute el temporizador y qu�telo de forma segura cuando haya terminado (permitiendo la eliminaci�n externa)
		if (! timer () && timers [i] === timer) {
			temporizadores.splice (i--, 1);
		}
	}

	if (! timers.length) {
		jQuery.fx.stop ();
	}
	fxNow = indefinido;
};

jQuery.fx.timer = funci�n (temporizador) {
	jQuery.timers.push (temporizador);
	jQuery.fx.start ();
};

jQuery.fx.interval = 13;
jQuery.fx.start = function () {
	if (inProgress) {
		regreso;
	}

	inProgress = true;
	calendario();
};

jQuery.fx.stop = function () {
	inProgress = null;
};

jQuery.fx.speeds = {
	lento: 600,
	r�pido: 200,

	// Velocidad predeterminada
	_predeterminado: 400
};


// Basado en el complemento de Clint Helfers, con permiso.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function (tiempo, tipo) {
	tiempo = jQuery.fx? jQuery.fx.speeds [tiempo] || tiempo tiempo;
	tipo = tipo || "fx";

	return this.queue (tipo, funci�n (siguiente, ganchos) {
		var timeout = window.setTimeout (siguiente, hora);
		hooks.stop = function () {
			window.clearTimeout (tiempo de espera);
		};
	});
};


(funci�n () {
	var input = document.createElement ("entrada"),
		select = document.createElement ("seleccionar"),
		opt = select.appendChild (document.createElement ("opci�n"));

	input.type = "casilla de verificaci�n";

	// Soporte: Android <= 4.3 solamente
	// El valor predeterminado para una casilla de verificaci�n debe estar "activado"
	support.checkOn = input.value! == "";

	// Soporte: IE <= 11 solamente
	// Debe acceder a selectedIndex para hacer que las opciones predeterminadas seleccionen
	support.optSelected = opt.selected;

	// Soporte: IE <= 11 solamente
	// Una entrada pierde su valor despu�s de convertirse en radio
	input = document.createElement ("entrada");
	input.value = "t";
	input.type = "radio";
	support.radioValue = input.value === "t";
}) ();


var boolHook,
	attrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend ({
	attr: function (nombre, valor) {
		acceso de retorno (esto, jQuery.attr, nombre, valor, argumentos.longitud> 1);
	},

	removeAttr: function (nombre) {
		devuelve this.each (function () {
			jQuery.removeAttr (este, nombre);
		});
	}
});

jQuery.extend ({
	attr: function (elem, name, value) {
		var ret, ganchos,
			nType = elem.nodeType;

		// No obtenga / establezca atributos en texto, comentarios y nodos de atributos
		if (nType === 3 || nType === 8 || nType === 2) {
			regreso;
		}

		// Recurrir a prop cuando los atributos no son compatibles
		if (typeof elem.getAttribute === "undefined") {
			return jQuery.prop (elem, nombre, valor);
		}

		// Los ganchos de atributos est�n determinados por la versi�n en min�sculas
		// Agarra el gancho necesario si hay uno definido
		if (nType! == 1 ||! jQuery.isXMLDoc (elem)) {
			hooks = jQuery.attrHooks [name.toLowerCase ()] ||
				(jQuery.expr.match.bool.test (nombre)? boolHook: undefined);
		}

		si (valor! == indefinido) {
			si (valor === nulo) {
				jQuery.removeAttr (elem, nombre);
				regreso;
			}

			if (hooks && "set" in hooks &&
				(ret = hooks.set (elem, valor, nombre))! == indefinido) {
				return ret;
			}

			elem.setAttribute (nombre, valor + "");
			valor de retorno;
		}

		if (hooks && "get" in hooks && (ret = hooks.get (elem, name))! == null) {
			return ret;
		}

		ret = jQuery.find.attr (elem, nombre);

		// Los atributos inexistentes devuelven nulo, normalizamos a indefinido
		return ret == null? indefinido: ret;
	},

	attrHooks: {
		tipo: {
			set: function (elem, value) {
				if (! support.radioValue && value === "radio" &&
					nodeName (elem, "input")) {
					var val = elem.value;
					elem.setAttribute ("tipo", valor);
					if (val) {
						elem.value = val;
					}
					valor de retorno;
				}
			}
		}
	},

	removeAttr: function (elem, value) {
		var nombre,
			i = 0,

			// Los nombres de los atributos pueden contener espacios en blanco que no sean HTML
			// https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
			attrNames = valor && valor.match (rnothtmlwhite);

		if (attrNames && elem.nodeType === 1) {
			while ((name = attrNames [i ++])) {
				elem.removeAttribute (nombre);
			}
		}
	}
});

// Ganchos para atributos booleanos
boolHook = {
	set: function (elem, value, name) {
		si (valor === falso) {

			// Elimina los atributos booleanos cuando se establece en falso
			jQuery.removeAttr (elem, nombre);
		} dem�s {
			elem.setAttribute (nombre, nombre);
		}
		nombre de retorno;
	}
};

jQuery.each (jQuery.expr.match.bool.source.match (/ \ w + / g), function (_i, name) {
	var getter = attrHandle [nombre] || jQuery.find.attr;

	attrHandle [nombre] = funci�n (elem, nombre, isXML) {
		var ret, manejar,
			lowercaseName = name.toLowerCase ();

		if (! isXML) {

			// Evita un bucle infinito eliminando temporalmente esta funci�n del getter
			handle = attrHandle [nombre en min�scula];
			attrHandle [min�sculaNombre] = ret;
			ret = getter (elem, nombre, isXML)! = null?
				nombre en min�scula:
				nulo;
			attrHandle [nombre en min�scula] = identificador;
		}
		return ret;
	};
});




var rfocusable = / ^ (?: entrada | seleccionar | �rea de texto | bot�n) $ / i,
	rclickable = / ^ (?: un | �rea) $ / i;

jQuery.fn.extend ({
	prop: function (nombre, valor) {
		acceso de retorno (esto, jQuery.prop, nombre, valor, argumentos.longitud> 1);
	},

	removeProp: function (nombre) {
		devuelve this.each (function () {
			eliminar este [jQuery.propFix [nombre] || nombre ];
		});
	}
});

jQuery.extend ({
	prop: function (elem, name, value) {
		var ret, ganchos,
			nType = elem.nodeType;

		// No obtenga / establezca propiedades en nodos de texto, comentarios y atributos
		if (nType === 3 || nType === 8 || nType === 2) {
			regreso;
		}

		if (nType! == 1 ||! jQuery.isXMLDoc (elem)) {

			// Arreglar nombre y adjuntar ganchos
			nombre = jQuery.propFix [nombre] || nombre;
			hooks = jQuery.propHooks [nombre];
		}

		si (valor! == indefinido) {
			if (hooks && "set" in hooks &&
				(ret = hooks.set (elem, valor, nombre))! == indefinido) {
				return ret;
			}

			return (elem [nombre] = valor);
		}

		if (hooks && "get" in hooks && (ret = hooks.get (elem, name))! == null) {
			return ret;
		}

		return elem [nombre];
	},

	propHooks: {
		tabIndex: {
			get: function (elem) {

				// Soporte: IE <= 9 - 11 solamente
				// elem.tabIndex no siempre devuelve el
				// valor correcto cuando no se ha establecido expl�citamente
				// https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
				// Utilice la recuperaci�n de atributos adecuada (# 12072)
				var tabindex = jQuery.find.attr (elem, "tabindex");

				if (tabindex) {
					return parseInt (tabindex, 10);
				}

				Si (
					rfocusable.test (elem.nodeName) ||
					rclickable.test (elem.nodeName) &&
					elem.href
				) {
					return 0;
				}

				return -1;
			}
		}
	},

	propFix: {
		"para": "htmlFor",
		"class": "className"
	}
});

// Soporte: IE <= 11 solamente
// Accediendo a la propiedad selectedIndex
// obliga al navegador a respetar la configuraci�n seleccionada
// en la opci�n
// El captador asegura que se selecciona una opci�n predeterminada
// cuando en un optgroup
// la regla eslint "no-unused-expression" est� deshabilitada para este c�digo
// ya que considera tales accesiones noop
if (! support.optSelected) {
	jQuery.propHooks.selected = {
		get: function (elem) {

			/ * eslint no-unused-expresiones: "off" * /

			var parent = elem.parentNode;
			if (parent && parent.parentNode) {
				parent.parentNode.selectedIndex;
			}
			devolver nulo;
		},
		conjunto: funci�n (elem) {

			/ * eslint no-unused-expresiones: "off" * /

			var parent = elem.parentNode;
			if (padre) {
				parent.selectedIndex;

				if (parent.parentNode) {
					parent.parentNode.selectedIndex;
				}
			}
		}
	};
}

jQuery.each ([
	"tabIndex",
	"solo lectura",
	"longitud m�xima",
	"cellSpacing",
	"cellPadding",
	"rowSpan",
	"colSpan",
	"useMap",
	"Frontera del marco",
	"contentEditable"
], funci�n () {
	jQuery.propFix [this.toLowerCase ()] = esto;
});




	// Elimina y contrae los espacios en blanco de acuerdo con las especificaciones de HTML
	// https://infra.spec.whatwg.org/#strip-and-collapse-ascii-whitespace
	function stripAndCollapse (valor) {
		var tokens = value.match (rnothtmlwhite) || [];
		return tokens.join ("");
	}


function getClass (elem) {
	return elem.getAttribute && elem.getAttribute ("clase") || "";
}

function classesToArray (value) {
	if (Array.isArray (valor)) {
		valor de retorno;
	}
	si (tipo de valor === "cadena") {
		return value.match (rnothtmlwhite) || [];
	}
	regreso [];
}

jQuery.fn.extend ({
	addClass: function (value) {
		clases var, elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if (isFunction (valor)) {
			devuelve esto.each (function (j) {
				jQuery (esto) .addClass (valor.call (esto, j, getClass (esto)));
			});
		}

		clases = classesToArray (valor);

		if (classes.length) {
			while ((elem = this [i ++])) {
				curValue = getClass (elem);
				cur = elem.nodeType === 1 && ("" + stripAndCollapse (curValue) + "");

				si (cur) {
					j = 0;
					while ((clazz = classes [j ++])) {
						if (cur.indexOf ("" + clazz + "") <0) {
							cur + = clazz + "";
						}
					}

					// Asigne solo si es diferente para evitar una renderizaci�n innecesaria.
					finalValue = stripAndCollapse (cur);
					if (curValue! == finalValue) {
						elem.setAttribute ("clase", valor final);
					}
				}
			}
		}

		devuelve esto;
	},

	removeClass: function (value) {
		clases var, elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if (isFunction (valor)) {
			devuelve esto.each (function (j) {
				jQuery (esto) .removeClass (valor.call (esto, j, getClass (esto)));
			});
		}

		if (! argumentos.longitud) {
			return this.attr ("clase", "");
		}

		clases = classesToArray (valor);

		if (classes.length) {
			while ((elem = this [i ++])) {
				curValue = getClass (elem);

				// Esta expresi�n est� aqu� para una mejor compresibilidad (ver addClass)
				cur = elem.nodeType === 1 && ("" + stripAndCollapse (curValue) + "");

				si (cur) {
					j = 0;
					while ((clazz = classes [j ++])) {

						// Eliminar * todas * las instancias
						while (cur.indexOf ("" + clazz + "")> -1) {
							cur = cur.replace ("" + clazz + "", "");
						}
					}

					// Asigne solo si es diferente para evitar una renderizaci�n innecesaria.
					finalValue = stripAndCollapse (cur);
					if (curValue! == finalValue) {
						elem.setAttribute ("clase", valor final);
					}
				}
			}
		}

		devuelve esto;
	},

	toggleClass: function (value, stateVal) {
		var tipo = tipo de valor,
			isValidValue = tipo === "cadena" || Array.isArray (valor);

		if (typeof stateVal === "boolean" && isValidValue) {
			return stateVal? this.addClass (valor): this.removeClass (valor);
		}

		if (isFunction (valor)) {
			devuelve this.each (function (i) {
				jQuery (esto) .toggleClass (
					value.call (this, i, getClass (esto), stateVal),
					stateVal
				);
			});
		}

		devuelve this.each (function () {
			var className, i, self, classNames;

			if (isValidValue) {

				// Alternar nombres de clases individuales
				i = 0;
				self = jQuery (esto);
				classNames = classesToArray (valor);

				while ((className = classNames [i ++])) {

					// Verifique cada className dado, lista separada por espacios
					if (self.hasClass (className)) {
						self.removeClass (className);
					} dem�s {
						self.addClass (className);
					}
				}

			// Cambiar el nombre completo de la clase
			} m�s si (valor === indefinido || tipo === "booleano") {
				className = getClass (esto);
				if (className) {

					// Almacenar className si est� configurado
					dataPriv.set (esto, "__className__", className);
				}

				// Si el elemento tiene un nombre de clase o si nos pasamos `falso`,
				// luego elimine todo el nombre de la clase (si hab�a uno, lo anterior lo guard�).
				// De lo contrario, recupere lo que haya guardado previamente (si es que hay algo),
				// retrocediendo a la cadena vac�a si no se almacen� nada.
				if (this.setAttribute) {
					this.setAttribute ("clase",
						className || valor === falso?
							"":
							dataPriv.get (esto, "__className__") || ""
					);
				}
			}
		});
	},

	hasClass: function (selector) {
		var className, elem,
			i = 0;

		className = "" + selector + "";
		while ((elem = this [i ++])) {
			if (elem.nodeType === 1 &&
				("" + stripAndCollapse (getClass (elem)) + "") .indexOf (className)> -1) {
				devuelve verdadero;
			}
		}

		falso retorno;
	}
});




var rreturn = / \ r / g;

jQuery.fn.extend ({
	val: funci�n (valor) {
		var hooks, ret, valueIsFunction,
			elem = este [0];

		if (! argumentos.longitud) {
			si (elem) {
				hooks = jQuery.valHooks [elem.type] ||
					jQuery.valHooks [elem.nodeName.toLowerCase ()];

				si (ganchos &&
					"conseguir" en ganchos &&
					(ret = hooks.get (elem, "valor"))! == indefinido
				) {
					return ret;
				}

				ret = elem.value;

				// Maneja los casos de cuerdas m�s comunes
				if (typeof ret === "cadena") {
					return ret.replace (rreturn, "");
				}

				// Manejar casos donde el valor es nulo / indefinido o n�mero
				return ret == null? "": ret;
			}

			regreso;
		}

		valueIsFunction = isFunction (valor);

		devuelve this.each (function (i) {
			var val;

			if (this.nodeType! == 1) {
				regreso;
			}

			if (valueIsFunction) {
				val = value.call (this, i, jQuery (this) .val ());
			} dem�s {
				val = valor;
			}

			// Tratar nulo / indefinido como ""; convertir n�meros en cadena
			if (val == null) {
				val = "";

			} else if (typeof val === "n�mero") {
				val + = "";

			} else if (Array.isArray (val)) {
				val = jQuery.map (val, function (value) {
					valor de retorno == nulo? "": valor + "";
				});
			}

			hooks = jQuery.valHooks [this.type] || jQuery.valHooks [this.nodeName.toLowerCase ()];

			// Si el conjunto devuelve indefinido, volver a la configuraci�n normal
			if (! hooks ||! ("set" en hooks) || hooks.set (this, val, "value") === undefined) {
				this.value = val;
			}
		});
	}
});

jQuery.extend ({
	valHooks: {
		opci�n: {
			get: function (elem) {

				var val = jQuery.find.attr (elem, "valor");
				return val! = null?
					val:

					// Soporte: IE <= 10 - 11 solamente
					// option.text arroja excepciones (# 14686, # 14858)
					// Eliminar y contraer espacios en blanco
					// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
					stripAndCollapse (jQuery.text (elem));
			}
		},
		Seleccione: {
			get: function (elem) {
				var valor, opci�n, i,
					options = elem.options,
					index = elem.selectedIndex,
					one = elem.type === "seleccionar uno",
					valores = uno? nulo : [],
					max = uno? �ndice + 1: opciones.longitud;

				si (�ndice <0) {
					i = max;

				} dem�s {
					yo = uno? �ndice: 0;
				}

				// Recorre todas las opciones seleccionadas
				para (; i <max; i ++) {
					opci�n = opciones [i];

					// Soporte: IE <= 9 solamente
					// IE8-9 no se actualiza seleccionado despu�s de restablecer el formulario (# 2551)
					if ((opci�n.seleccionada || i === �ndice) &&

							// No devuelva opciones que est�n deshabilitadas o en un optgroup deshabilitado
							! option.disabled &&
							(! option.parentNode.disabled ||
								! nodeName (option.parentNode, "optgroup"))) {

						// Obtenga el valor espec�fico para la opci�n
						valor = jQuery (opci�n) .val ();

						// No necesitamos una matriz para una selecci�n
						si uno ) {
							valor de retorno;
						}

						// Las selecciones m�ltiples devuelven una matriz
						valores.push (valor);
					}
				}

				valores de retorno;
			},

			set: function (elem, value) {
				var optionSet, opci�n,
					options = elem.options,
					valores = jQuery.makeArray (valor),
					i = options.length;

				mientras yo-- ) {
					opci�n = opciones [i];

					/ * eslint-disable no-cond-assign * /

					si (opci�n.seleccionado =
						jQuery.inArray (jQuery.valHooks.option.get (opci�n), valores)> -1
					) {
						optionSet = true;
					}

					/ * eslint-enable no-cond-assign * /
				}

				// Obligar a los navegadores a comportarse de forma coherente cuando se establece un valor no coincidente
				if (! optionSet) {
					elem.selectedIndex = -1;
				}
				valores de retorno;
			}
		}
	}
});

// Radios y casillas de verificaci�n getter / setter
jQuery.each (["radio", "casilla de verificaci�n"], funci�n () {
	jQuery.valHooks [this] = {
		set: function (elem, value) {
			if (Array.isArray (valor)) {
				return (elem.checked = jQuery.inArray (jQuery (elem) .val (), valor)> -1);
			}
		}
	};
	if (! support.checkOn) {
		jQuery.valHooks [this] .get = function (elem) {
			return elem.getAttribute ("valor") === null? "on": elem.value;
		};
	}
});




// Devuelve jQuery para inclusi�n solo de atributos


support.focusin = "onfocusin" en la ventana;


var rfocusMorph = / ^ (?: focusinfocus | focusoutblur) $ /,
	stopPropagationCallback = function (e) {
		e.stopPropagation ();
	};

jQuery.extend (jQuery.event, {

	disparador: funci�n (evento, datos, elem, onlyHandlers) {

		var i, cur, tmp, bubbleType, ontype, handle, special, lastElement,
			eventPath = [elem || documento],
			type = hasOwn.call (evento, "tipo")? event.type: evento,
			espacios de nombres = hasOwn.call (evento, "espacio de nombres")? event.namespace.split ("."): [];

		cur = lastElement = tmp = elem = elem || documento;

		// No hagas eventos en nodos de texto y comentarios
		if (elem.nodeType === 3 || elem.nodeType === 8) {
			regreso;
		}

		// enfoque / desenfoque se transforma en focusin / out; aseg�rese de que no los estamos despidiendo ahora mismo
		if (rfocusMorph.test (type + jQuery.event.triggered)) {
			regreso;
		}

		if (type.indexOf (".")> -1) {

			// Activador con espacio de nombres; crear una expresi�n regular para que coincida con el tipo de evento en handle ()
			espacios de nombres = type.split (".");
			type = namespaces.shift ();
			namespaces.sort ();
		}
		ontype = type.indexOf (":") <0 && "on" + type;

		// La persona que llama puede pasar un objeto jQuery.Event, Object o simplemente una cadena de tipo de evento
		event = evento [jQuery.expando]?
			evento:
			new jQuery.Event (tipo, tipo de evento === "objeto" && evento);

		// Activar m�scara de bits: & 1 para controladores nativos; & 2 para jQuery (siempre cierto)
		event.isTrigger = onlyHandlers? 2: 3;
		event.namespace = namespaces.join (".");
		event.rnamespace = event.namespace?
			new RegExp ("(^ | \\.)" + namespaces.join ("\\. (?:. * \\. |)") + "(\\. | $)"):
			nulo;

		// Limpiar el evento en caso de que se reutilice
		event.result = undefined;
		if (! event.target) {
			event.target = elem;
		}

		// Clone cualquier dato entrante y anteponga el evento, creando la lista arg del controlador
		datos = datos == nulo?
			[evento]:
			jQuery.makeArray (datos, [evento]);

		// Permitir que los eventos especiales se dibujen fuera de las l�neas
		especial = jQuery.event.special [tipo] || {};
		if (! onlyHandlers && special.trigger && special.trigger.apply (elem, data) === false) {
			regreso;
		}

		// Determine la ruta de propagaci�n de eventos por adelantado, seg�n la especificaci�n de eventos W3C (# 9951)
		// Burbujear hasta el documento, luego a la ventana; Est� atento a una var de ownerDocument global (# 9724)
		if (! onlyHandlers &&! special.noBubble &&! isWindow (elem)) {

			bubbleType = special.delegateType || tipo;
			if (! rfocusMorph.test (bubbleType + type)) {
				cur = cur.parentNode;
			}
			para (; cur; cur = cur.parentNode) {
				eventPath.push (cur);
				tmp = cur;
			}

			// Solo agregue la ventana si llegamos al documento (por ejemplo, no obj simple o DOM separado)
			if (tmp === (elem.ownerDocument || documento)) {
				eventPath.push (tmp.defaultView || tmp.parentWindow || ventana);
			}
		}

		// Controladores de incendios en la ruta del evento
		i = 0;
		while ((cur = eventPath [i ++]) &&! event.isPropagationStopped ()) {
			lastElement = cur;
			event.type = i> 1?
				bubbleType:
				special.bindType || tipo;

			// controlador jQuery
			handle = (dataPriv.get (cur, "eventos") || Object.create (null)) [event.type] &&
				dataPriv.get (cur, "manejar");
			si (manejar) {
				handle.apply (cur, datos);
			}

			// Controlador nativo
			handle = ontype && cur [ontype];
			if (handle && handle.apply && acceptData (cur)) {
				event.result = handle.apply (cur, data);
				if (event.result === false) {
					event.preventDefault ();
				}
			}
		}
		event.type = tipo;

		// Si nadie impidi� la acci�n predeterminada, h�galo ahora
		if (! onlyHandlers &&! event.isDefaultPrevented ()) {

			if ((! special._default ||
				special._default.apply (eventPath.pop (), data) === falso) &&
				acceptData (elem)) {

				// Llame a un m�todo DOM nativo en el objetivo con el mismo nombre que el evento.
				// No realice acciones predeterminadas en la ventana, ah� es donde est�n las variables globales (# 6170)
				if (ontype && isFunction (elem [tipo]) &&! isWindow (elem)) {

					// No vuelva a activar un evento onFOO cuando llamamos a su m�todo FOO ()
					tmp = elem [ontype];

					si (tmp) {
						elem [ontype] = nulo;
					}

					// Evita que se vuelva a activar el mismo evento, ya que ya lo hicimos burbujear arriba
					jQuery.event.triggered = tipo;

					if (event.isPropagationStopped ()) {
						lastElement.addEventListener (tipo, stopPropagationCallback);
					}

					elem [tipo] ();

					if (event.isPropagationStopped ()) {
						lastElement.removeEventListener (tipo, stopPropagationCallback);
					}

					jQuery.event.triggered = undefined;

					si (tmp) {
						elem [ontype] = tmp;
					}
				}
			}
		}

		return event.result;
	},

	// Aprovecha un evento de donantes para simular uno diferente
	// Usado solo para eventos `focus (in | out)`
	simular: funci�n (tipo, elem, evento) {
		var e = jQuery.extend (
			nuevo jQuery.Event (),
			evento,
			{
				tipo: tipo,
				isSimulated: verdadero
			}
		);

		jQuery.event.trigger (e, nulo, elem);
	}

});

jQuery.fn.extend ({

	disparador: funci�n (tipo, datos) {
		devuelve this.each (function () {
			jQuery.event.trigger (tipo, datos, esto);
		});
	},
	triggerHandler: function (tipo, datos) {
		var elem = this [0];
		si (elem) {
			return jQuery.event.trigger (tipo, datos, elem, verdadero);
		}
	}
});


// Soporte: Firefox <= 44
// Firefox no tiene eventos de enfoque (in | out)
// Ticket relacionado - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Soporte: Chrome <= 48 - 49, Safari <= 9.0 - 9.1
// los eventos de enfoque (entrada | salida) se activan despu�s de los eventos de enfoque y desenfoque,
// que es una violaci�n de las especificaciones - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Ticket relacionado - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
if (! support.focusin) {
	jQuery.each ({focus: "focusin", blur: "focusout"}, function (orig, fix) {

		// Adjunte un solo controlador de captura en el documento mientras alguien quiere focusin / focusout
		var handler = function (evento) {
			jQuery.event.simulate (arreglar, event.target, jQuery.event.fix (evento));
		};

		jQuery.event.special [correcci�n] = {
			configuraci�n: funci�n () {

				// Manejar: nodos regulares (a trav�s de `this.ownerDocument`), ventana
				// (a trav�s de `this.document`) & document (a trav�s de` this`).
				var doc = this.ownerDocument || este.documento || esto,
					adjunta = dataPriv.access (doc, arreglar);

				si (! adjunta) {
					doc.addEventListener (orig, handler, true);
				}
				dataPriv.access (doc, arreglar, (adjunta || 0) + 1);
			},
			desmontaje: funci�n () {
				var doc = this.ownerDocument || este.documento || esto,
					adjunta = dataPriv.access (doc, fix) - 1;

				si (! adjunta) {
					doc.removeEventListener (original, controlador, verdadero);
					dataPriv.remove (doc, arreglar);

				} dem�s {
					dataPriv.access (doc, arreglar, adjuntar);
				}
			}
		};
	});
}
var location = window.location;

var nonce = {guid: Date.now ()};

var rquery = (/ \? /);



// An�lisis xml entre navegadores
jQuery.parseXML = funci�n (datos) {
	var xml, parserErrorElem;
	if (! data || typeof data! == "cadena") {
		devolver nulo;
	}

	// Soporte: IE 9-11 solamente
	// IE lanza parseFromString con una entrada no v�lida.
	intentar {
		xml = (nueva ventana.DOMParser ()) .parseFromString (datos, "texto / xml");
	} atrapar (e) {}

	parserErrorElem = xml && xml.getElementsByTagName ("parsererror") [0];
	if (! xml || parserErrorElem) {
		jQuery.error ("XML no v�lido:" + (
			parserErrorElem?
				jQuery.map (parserErrorElem.childNodes, function (el) {
					return el.textContent;
				}) .join ("\ n"):
				datos
		));
	}
	return xml;
};


var
	rbracket = / \ [\] $ /,
	rCRLF = / \ r? \ n / g,
	rsubmitterTypes = / ^ (?: enviar | bot�n | imagen | restablecer | archivo) $ / i,
	rsubmittable = / ^ (?: entrada | seleccionar | �rea de texto | keygen) / i;

function buildParams (prefix, obj, traditional, add) {
	var nombre;

	if (Array.isArray (obj)) {

		// Serializar el elemento de la matriz.
		jQuery.each (obj, function (i, v) {
			if (tradicional || rbracket.test (prefijo)) {

				// Trate cada elemento de la matriz como un escalar.
				agregar (prefijo, v);

			} dem�s {

				// El elemento no es escalar (matriz u objeto), codifica su �ndice num�rico.
				buildParams (
					prefijo + "[" + (tipo de v === "objeto" && v! = nulo? i: "") + "]",
					v,
					tradicional,
					agregar
				);
			}
		});

	} else if (! tradicional && toType (obj) === "object") {

		// Serializar el elemento del objeto.
		para (nombre en obj) {
			buildParams (prefijo + "[" + nombre + "]", obj [nombre], tradicional, a�adir);
		}

	} dem�s {

		// Serializar elemento escalar.
		agregar (prefijo, obj);
	}
}

// Serializar una matriz de elementos de formulario o un conjunto de
// clave / valores en una cadena de consulta
jQuery.param = function (a, tradicional) {
	prefijo var,
		s = [],
		add = function (key, valueOrFunction) {

			// Si el valor es una funci�n, invocalo y usa su valor de retorno
			var value = isFunction (valueOrFunction)?
				valueOrFunction ():
				valueOrFunction;

			s [s.length] = encodeURIComponent (clave) + "=" +
				encodeURIComponent (valor == nulo? "": valor);
		};

	si (a == nulo) {
		regreso "";
	}

	// Si se pas� una matriz, suponga que es una matriz de elementos de formulario.
	if (Array.isArray (a) || (a.jquery &&! jQuery.isPlainObject (a))) {

		// Serializar los elementos del formulario
		jQuery.each (a, function () {
			agregar (este.nombre, este.valor);
		});

	} dem�s {

		// Si es tradicional, codifique la forma "antigua" (la forma 1.3.2 o anterior
		// lo hizo), de lo contrario codifica los par�metros de forma recursiva.
		para (prefijo en a) {
			buildParams (prefijo, un [prefijo], tradicional, a�adir);
		}
	}

	// Devuelve la serializaci�n resultante
	return s.join ("&");
};

jQuery.fn.extend ({
	serializar: funci�n () {
		return jQuery.param (this.serializeArray ());
	},
	serializeArray: function () {
		devuelve this.map (function () {

			// Puede agregar propHook para "elementos" para filtrar o agregar elementos de formulario
			var elementos = jQuery.prop (esto, "elementos");
			devolver elementos? jQuery.makeArray (elementos): esto;
		}) .filter (funci�n () {
			var type = this.type;

			// Usa .is (": disabled") para que fieldset [disabled] funcione
			devuelve this.name &&! jQuery (this) .is (": disabled") &&
				rsubmittable.test (this.nodeName) &&! rsubmitterTypes.test (tipo) &&
				(this.checked ||! rcheckableType.test (tipo));
		}) .map (funci�n (_i, elem) {
			var val = jQuery (esto) .val ();

			if (val == null) {
				devolver nulo;
			}

			if (Array.isArray (val)) {
				return jQuery.map (val, function (val) {
					return {nombre: elem.name, valor: val.replace (rCRLF, "\ r \ n")};
				});
			}

			return {nombre: elem.name, valor: val.replace (rCRLF, "\ r \ n")};
		} ).obtener();
	}
});


var
	r20 = /% 20 / g,
	rhash = /#.*$/,
	rantiCache = / ([? &]) _ = [^ &] * /,
	rheaders = / ^ (. *?): [\ t] * ([^ \ r \ n] *) $ / mg,

	// # 7653, # 8125, # 8152: detecci�n de protocolo local
	rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
	rnoContent = / ^ (?: OBTENER | CABEZA) $ /,
	rprotocol = / ^ \ / \ //,

	/ * Prefiltros
	 * 1) Son �tiles para introducir tipos de datos personalizados (consulte ajax / jsonp.js para ver un ejemplo)
	 * 2) Estos se denominan:
	 * - ANTES de solicitar un transporte
	 * - DESPU�S de la serializaci�n de par�metros (s.data es una cadena si s.processData es verdadero)
	 * 3) la clave es el tipo de datos
	 * 4) se puede utilizar el s�mbolo de captura "*"
	 * 5) la ejecuci�n comenzar� con el tipo de datos de transporte y LUEGO continuar� hasta "*" si es necesario
	 * /
	prefiltros = {},

	/ * Transporta fijaciones
	 * 1) la clave es el tipo de datos
	 * 2) se puede utilizar el s�mbolo de captura "*"
	 * 3) la selecci�n comenzar� con el tipo de datos de transporte y ENTONCES ir� a "*" si es necesario
	 * /
	transportes = {},

	// Evite la secuencia de caracteres comentario-pr�logo (# 10098); debe apaciguar la pelusa y evitar la compresi�n
	allTypes = "* /". concat ("*"),

	// Etiqueta de anclaje para analizar el origen del documento
	originAnchor = document.createElement ("a");

originAnchor.href = ubicaci�n.href;

// "Constructor" base para jQuery.ajaxPrefilter y jQuery.ajaxTransport
function addToPrefiltersOrTransports (estructura) {

	// dataTypeExpression es opcional y el valor predeterminado es "*"
	funci�n de retorno (dataTypeExpression, func) {

		if (typeof dataTypeExpression! == "cadena") {
			func = dataTypeExpression;
			dataTypeExpression = "*";
		}

		var dataType,
			i = 0,
			dataTypes = dataTypeExpression.toLowerCase (). match (rnothtmlwhite) || [];

		if (isFunction (func)) {

			// Para cada dataType en dataTypeExpression
			while ((dataType = dataTypes [i ++])) {

				// Anteponer si se solicita
				if (dataType [0] === "+") {
					dataType = dataType.slice (1) || "*";
					(estructura [tipo de datos] = estructura [tipo de datos] || []) .unshift (func);

				// De lo contrario, anexar
				} dem�s {
					(estructura [tipo de datos] = estructura [tipo de datos] || []) .push (func);
				}
			}
		}
	};
}

// Funci�n de inspecci�n b�sica para prefiltros y transportes
function inspectPrefiltersOrTransports (estructura, opciones, originalOptions, jqXHR) {

	var inspected = {},
		seekTransport = (estructura === transportes);

	function inspeccionar (tipo de datos) {
		var seleccionado;
		inspeccionado [tipo de datos] = verdadero;
		jQuery.each (estructura [tipo de datos] || [], funci�n (_, prefiltroOrFactory) {
			var dataTypeOrTransport = prefilterOrFactory (opciones, originalOptions, jqXHR);
			if (typeof dataTypeOrTransport === "cadena" &&
				! lookingTransport &&! inspected [dataTypeOrTransport]) {

				options.dataTypes.unshift (dataTypeOrTransport);
				inspeccionar (dataTypeOrTransport);
				falso retorno;
			} else if (lookingTransport) {
				return! (seleccionado = dataTypeOrTransport);
			}
		});
		volver seleccionado;
	}

	return inspeccionar (options.dataTypes [0]) || ! inspeccionado ["*"] && inspeccionar ("*");
}

// Una extensi�n especial para las opciones ajax
// que toma opciones "planas" (que no deben extenderse en profundidad)
// Corrige # 9887
function ajaxExtend (target, src) {
	var clave, profunda,
		flatOptions = jQuery.ajaxSettings.flatOptions || {};

	for (introduzca src) {
		if (src [clave]! == indefinido) {
			(flatOptions [key]? target: (deep || (deep = {}))) [key] = src [key];
		}
	}
	si (profundo) {
		jQuery.extend (verdadero, objetivo, profundo);
	}

	objetivo de retorno;
}

/ * Maneja respuestas a una solicitud ajax:
 *: encuentra el tipo de datos correcto (media entre el tipo de contenido y el tipo de datos esperado)
 * - devuelve la respuesta correspondiente
 * /
function ajaxHandleResponses (s, jqXHR, respuestas) {

	var ct, type, finalDataType, firstDataType,
		contenido = contenido,
		dataTypes = s.dataTypes;

	// Elimina auto dataType y obt�n el tipo de contenido en el proceso
	while (dataTypes [0] === "*") {
		dataTypes.shift ();
		if (ct === undefined) {
			ct = s.mimeType || jqXHR.getResponseHeader ("Tipo de contenido");
		}
	}

	// Compruebe si estamos tratando con un tipo de contenido conocido
	si (ct) {
		para (escriba el contenido) {
			if (contenido [tipo] && contenido [tipo] .test (ct)) {
				dataTypes.unshift (tipo);
				rotura;
			}
		}
	}

	// Verifica si tenemos una respuesta para el tipo de datos esperado
	if (dataTypes [0] en las respuestas) {
		finalDataType = dataTypes [0];
	} dem�s {

		// Pruebe tipos de datos convertibles
		para (escriba las respuestas) {
			if (! dataTypes [0] || s.converters [type + "" + dataTypes [0]]) {
				finalDataType = tipo;
				rotura;
			}
			if (! firstDataType) {
				firstDataType = tipo;
			}
		}

		// O simplemente usa el primero
		finalDataType = finalDataType || firstDataType;
	}

	// Si encontramos un tipo de datos
	// Agregamos el tipo de datos a la lista si es necesario
	// y devuelve la respuesta correspondiente
	if (finalDataType) {
		if (finalDataType! == dataTypes [0]) {
			dataTypes.unshift (finalDataType);
		}
		devolver respuestas [finalDataType];
	}
}

/ * Conversiones en cadena dada la solicitud y la respuesta original
 * Tambi�n establece los campos responseXXX en la instancia jqXHR
 * /
funci�n ajaxConvert (s, respuesta, jqXHR, isSuccess) {
	var conv2, actual, conv, tmp, prev,
		convertidores = {},

		// Trabajar con una copia de dataTypes en caso de que necesitemos modificarlo para la conversi�n
		dataTypes = s.dataTypes.slice ();

	// Crear mapa de convertidores con claves en min�sculas
	if (dataTypes [1]) {
		para (conv en convertidores) {
			convertidores [conv.toLowerCase ()] = s.converters [conv];
		}
	}

	current = dataTypes.shift ();

	// Convertir a cada tipo de datos secuencial
	while (actual) {

		if (s.responseFields [actual]) {
			jqXHR [s.responseFields [actual]] = respuesta;
		}

		// Aplicar el filtro de datos si se proporciona
		if (! prev && isSuccess && s.dataFilter) {
			response = s.dataFilter (respuesta, s.dataType);
		}

		prev = actual;
		current = dataTypes.shift ();

		si (actual) {

			// Solo hay trabajo por hacer si el tipo de datos actual no es autom�tico
			si (actual === "*") {

				actual = anterior;

			// Convierta la respuesta si prev dataType no es autom�tico y difiere del actual
			} else if (prev! == "*" && prev! == current) {

				// Busca un conversor directo
				conv = convertidores [anterior + "" + actual] || convertidores ["*" + actual];

				// Si no encuentra ninguno, busque un par
				if (! conv) {
					para (conv2 en convertidores) {

						// Si conv2 emite corriente
						tmp = conv2.split ("");
						if (tmp [1] === actual) {

							// Si prev se puede convertir en entrada aceptada
							conv = convertidores [prev + "" + tmp [0]] ||
								convertidores ["*" + tmp [0]];
							if (conv) {

								// Convertidores de equivalencia condensados
								if (conv === verdadero) {
									conv = convertidores [conv2];

								// De lo contrario, inserte el tipo de datos intermedio
								} else if (convertidores [conv2]! == verdadero) {
									corriente = tmp [0];
									dataTypes.unshift (tmp [1]);
								}
								rotura;
							}
						}
					}
				}

				// Aplicar convertidor (si no es una equivalencia)
				if (conv! == true) {

					// A menos que se permita que aparezcan errores, capturarlos y devolverlos
					if (conv && s.throws) {
						respuesta = conv (respuesta);
					} dem�s {
						intentar {
							respuesta = conv (respuesta);
						} captura (e) {
							regreso {
								estado: "parsererror",
								error: conv? e: "Sin conversi�n de" + anterior + "a" + actual
							};
						}
					}
				}
			}
		}
	}

	return {estado: "�xito", datos: respuesta};
}

jQuery.extend ({

	// Contador para mantener el n�mero de consultas activas
	activo: 0,

	// Cach� de encabezado de �ltima modificaci�n para la pr�xima solicitud
	�ltima modificaci�n: {},
	etag: {},

	ajaxSettings: {
		url: location.href,
		tipo: "OBTENER",
		isLocal: rlocalProtocol.test (location.protocol),
		global: verdadero,
		processData: verdadero,
		async: verdadero,
		contentType: "application / x-www-form-urlencoded; charset = UTF-8",

		/ *
		tiempo de espera: 0,
		datos: nulo,
		dataType: nulo,
		nombre de usuario: nulo,
		contrase�a: nula,
		cach�: nulo,
		arroja: falso,
		tradicional: falso,
		encabezados: {},
		* /

		acepta: {
			"*": todos los tipos,
			texto: "texto / sin formato",
			html: "texto / html",
			xml: "aplicaci�n / xml, texto / xml",
			json: "aplicaci�n / json, texto / javascript"
		},

		contenido: {
			xml: / \ bxml \ b /,
			html: / \ bhtml /,
			json: / \ bjson \ b /
		},

		responseFields: {
			xml: "responseXML",
			texto: "responseText",
			json: "responseJSON"
		},

		// Convertidores de datos
		// Las claves separan los tipos de origen (o catchall "*") y de destino con un solo espacio
		convertidores: {

			// Convierte cualquier cosa en texto
			"* texto": Cadena,

			// Texto a html (verdadero = sin transformaci�n)
			"texto html": verdadero,

			// Evaluar el texto como una expresi�n json
			"text json": JSON.parse,

			// Analizar texto como xml
			"texto xml": jQuery.parseXML
		},

		// Para opciones que no deber�an extenderse en profundidad:
		// puede agregar sus propias opciones personalizadas aqu� si
		// y cuando creas uno que no deber�a ser
		// extendido profundo (ver ajaxExtend)
		flatOptions: {
			url: cierto,
			contexto: verdadero
		}
	},

	// Crea un objeto de configuraci�n completo en el objetivo
	// con los campos ajaxSettings y settings.
	// Si se omite el objetivo, escribe en ajaxSettings.
	ajaxSetup: function (target, settings) {
		volver a la configuraci�n?

			// Construyendo un objeto de configuraci�n
			ajaxExtend (ajaxExtend (destino, jQuery.ajaxSettings), configuraci�n):

			// Ampliando ajaxSettings
			ajaxExtend (jQuery.ajaxSettings, destino);
	},

	ajaxPrefilter: addToPrefiltersOrTransports (prefiltros),
	ajaxTransport: addToPrefiltersOrTransports (transportes),

	// M�todo principal
	ajax: function (url, opciones) {

		// Si la URL es un objeto, simule la firma anterior a 1.5
		if (typeof url === "object") {
			opciones = url;
			url = indefinido;
		}

		// Forzar opciones para que sean un objeto
		opciones = opciones || {};

		transporte var,

			// URL sin par�metro anti-cach�
			cacheURL,

			// Encabezados de respuesta
			responseHeadersString,
			responseHeaders,

			// controlador de tiempo de espera
			timeoutTimer,

			// Var de limpieza de URL
			urlAnchor,

			// Estado de la solicitud (se vuelve falso al enviarse y verdadero al completarse)
			terminado,

			// Para saber si se enviar�n eventos globales
			fireGlobals

			// Variable de bucle
			I,

			// parte no almacenada en cach� de la URL
			sin cach�

			// Crea el objeto de opciones final
			s = jQuery.ajaxSetup ({}, opciones),

			// Contexto de devoluciones de llamada
			callbackContext = s.context || s,

			// El contexto para eventos globales es callbackContext si es un nodo DOM o una colecci�n jQuery
			globalEventContext = s.context &&
				(callbackContext.nodeType || callbackContext.jquery)?
				jQuery (callbackContext):
				jQuery.event,

			// Diferidos
			diferido = jQuery.Deferred (),
			completeDeferred = jQuery.Callbacks ("una vez memoria"),

			// devoluciones de llamada dependientes del estado
			statusCode = s.statusCode || {},

			// Encabezados (se env�an todos a la vez)
			requestHeaders = {},
			requestHeadersNames = {},

			// Mensaje de aborto predeterminado
			strAbort = "cancelado",

			// Falso xhr
			jqXHR = {
				readyState: 0,

				// Crea tablas hash de encabezados si es necesario
				getResponseHeader: function (key) {
					var match;
					if (completado) {
						if (! responseHeaders) {
							responseHeaders = {};
							while ((match = rheaders.exec (responseHeadersString))) {
								responseHeaders [match [1] .toLowerCase () + ""] =
									(responseHeaders [match [1] .toLowerCase () + ""] || [])
										.concat (coincide con [2]);
							}
						}
						match = responseHeaders [key.toLowerCase () + ""];
					}
					return match == null? null: match.join (",");
				},

				// Cadena sin procesar
				getAllResponseHeaders: function () {
					regreso completado? responseHeadersString: null;
				},

				// Almacena en cach� el encabezado
				setRequestHeader: function (nombre, valor) {
					si (completado == nulo) {
						nombre = requestHeadersNames [name.toLowerCase ()] =
							requestHeadersNames [name.toLowerCase ()] || nombre;
						requestHeaders [nombre] = valor;
					}
					devuelve esto;
				},

				// Anula el encabezado del tipo de contenido de la respuesta
				overrideMimeType: function (type) {
					si (completado == nulo) {
						s.mimeType = tipo;
					}
					devuelve esto;
				},

				// devoluciones de llamada dependientes del estado
				statusCode: function (map) {
					c�digo var;
					if (mapa) {
						if (completado) {

							// Ejecuta las devoluciones de llamada apropiadas
							jqXHR.always (mapa [jqXHR.status]);
						} dem�s {

							// Lazy-agregue las nuevas devoluciones de llamada de una manera que conserve las antiguas
							para (c�digo en el mapa) {
								statusCode [c�digo] = [statusCode [c�digo], mapa [c�digo]];
							}
						}
					}
					devuelve esto;
				},

				// Cancelar la solicitud
				abortar: function (statusText) {
					var finalText = statusText || strAbort;
					if (transporte) {
						transport.abort (finalText);
					}
					hecho (0, texto final);
					devuelve esto;
				}
			};

		// Adjuntar aplazamientos
		promesa.deferida (jqXHR);

		// Agregar protocolo si no se proporciona (los prefiltros pueden esperarlo)
		// Manejar URL falsa en el objeto de configuraci�n (# 10093: coherencia con la firma anterior)
		// Tambi�n usamos el par�metro url si est� disponible
		s.url = ((url || s.url || ubicaci�n.href) + "")
			.replace (rprotocol, location.protocol + "//");

		// Opci�n de m�todo de alias para escribir seg�n ticket # 12004
		s.type = options.method || options.type || s.method || s.type;

		// Extraer la lista de tipos de datos
		s.dataTypes = (s.dataType || "*") .toLowerCase (). match (rnothtmlwhite) || [""];

		// Una solicitud entre dominios est� en orden cuando el origen no coincide con el origen actual.
		if (s.crossDomain == null) {
			urlAnchor = document.createElement ("a");

			// Soporte: IE <= 8-11, Edge 12-15
			// IE lanza una excepci�n al acceder a la propiedad href si la URL est� mal formada,
			// por ejemplo, http://example.com:80x/
			intentar {
				urlAnchor.href = s.url;

				// Soporte: IE <= 8 - 11 solamente
				// La propiedad de host de Anchor no est� configurada correctamente cuando s.url es relativa
				urlAnchor.href = urlAnchor.href;
				s.crossDomain = originAnchor.protocol + "//" + originAnchor.host! ==
					urlAnchor.protocol + "//" + urlAnchor.host;
			} captura (e) {

				// Si hay un error al analizar la URL, suponga que es crossDomain,
				// puede ser rechazado por el transporte si no es v�lido
				s.crossDomain = true;
			}
		}

		// Convertir datos si a�n no es una cadena
		if (s.data && s.processData && typeof s.data! == "string") {
			s.data = jQuery.param (s.data, s.traditional);
		}

		// Aplicar prefiltros
		inspectPrefiltersOrTransports (prefiltros, s, opciones, jqXHR);

		// Si la solicitud fue cancelada dentro de un prefiltro, det�ngase all�
		if (completado) {
			return jqXHR;
		}

		// Podemos disparar eventos globales a partir de ahora si se nos solicita
		// No active eventos si jQuery.event no est� definido en un escenario de uso de AMD (# 15118)
		fireGlobals = jQuery.event && s.global;

		// Est� atento a un nuevo conjunto de solicitudes
		if (fireGlobals && jQuery.active ++ === 0) {
			jQuery.event.trigger ("ajaxStart");
		}

		// May�sculas el tipo
		s.type = s.type.toUpperCase ();

		// Determinar si la solicitud tiene contenido
		s.hasContent =! rnoContent.test (s.type);

		// Guarde la URL en caso de que estemos jugando con If-Modified-Since
		// y / o encabezado If-None-Match m�s adelante
		// Elimina el hash para simplificar la manipulaci�n de la URL
		cacheURL = s.url.replace (rhash, "");

		// M�s opciones de manejo de solicitudes sin contenido
		if (! s.hasContent) {

			// Recuerda el hash para que podamos devolverlo
			uncached = s.url.slice (cacheURL.length);

			// Si los datos est�n disponibles y deben procesarse, agregue los datos a la URL
			if (s.data && (s.processData || tipo de s.data === "cadena")) {
				cacheURL + = (rquery.test (cacheURL)? "&": "?") + s.data;

				// # 9682: eliminar datos para que no se utilicen en un eventual reintento
				eliminar datos;
			}

			// Agregue o actualice el par�metro anti-cach� si es necesario
			if (s.cach� === falso) {
				cacheURL = cacheURL.replace (rantiCache, "$ 1");
				uncached = (rquery.test (cacheURL)? "&": "?") + "_ =" + (nonce.guid ++) +
					sin cach�
			}

			// Pon hash y anti-cach� en la URL que se solicitar� (gh-1732)
			s.url = cacheURL + sin cach�;

		// Cambie '% 20' a '+' si est� codificado en el contenido del cuerpo del formulario (gh-2658)
		} else if (s.data && s.processData &&
			(s.contentType || "") .indexOf ("application / x-www-form-urlencoded") === 0) {
			s.data = s.data.replace (r20, "+");
		}

		// Establecer el encabezado If-Modified-Since y / o If-None-Match, si est� en modo ifModified.
		if (s.ifModified) {
			if (jQuery.lastModified [cacheURL]) {
				jqXHR.setRequestHeader ("Si-Modificado-Desde", jQuery.lastModified [cacheURL]);
			}
			if (jQuery.etag [cacheURL]) {
				jqXHR.setRequestHeader ("Si-ninguna-coincide", jQuery.etag [cacheURL]);
			}
		}

		// Establecer el encabezado correcto, si se env�an datos
		if (s.data && s.hasContent && s.contentType! == false || options.contentType) {
			jqXHR.setRequestHeader ("Tipo de contenido", s.contentType);
		}

		// Establezca el encabezado Acepta para el servidor, seg�n el tipo de datos
		jqXHR.setRequestHeader (
			"Aceptar",
			s.dataTypes [0] && s.accepts [s.dataTypes [0]]?
				s.accepts [s.dataTypes [0]] +
					(s.dataTypes [0]! == "*"? "," + allTypes + "; q = 0.01": ""):
				acepta ["*"]
		);

		// Verificar la opci�n de encabezados
		para (yo en los encabezados) {
			jqXHR.setRequestHeader (i, en los encabezados [i]);
		}

		// Permitir encabezados / tipos MIME personalizados y abortar anticipadamente
		si (antes de enviar &&
			(s.beforeSend.call (callbackContext, jqXHR, s) === falso || completado)) {

			// Abortar si a�n no lo ha hecho y regresar
			return jqXHR.abort ();
		}

		// Abortar ya no es una cancelaci�n
		strAbort = "abortar";

		// Instalar devoluciones de llamada en diferidos
		completeDeferred.add (s.complete);
		jqXHR.done (s.success);
		jqXHR.fail (s.error);

		// Obtener transporte
		transport = inspectPrefiltersOrTransports (transportes, s, opciones, jqXHR);

		// Si no hay transporte, abortamos autom�ticamente
		if (! transporte) {
			hecho (-1, "Sin transporte");
		} dem�s {
			jqXHR.readyState = 1;

			// Enviar evento global
			if (fireGlobals) {
				globalEventContext.trigger ("ajaxSend", [jqXHR, s]);
			}

			// Si la solicitud fue abortada dentro de ajaxSend, det�ngase all�
			if (completado) {
				return jqXHR;
			}

			// Se acab� el tiempo
			if (s.async && s.timeout> 0) {
				timeoutTimer = window.setTimeout (function () {
					jqXHR.abort ("tiempo de espera");
				}, s.timeout);
			}

			intentar {
				completado = falso;
				transport.send (requestHeaders, hecho);
			} captura (e) {

				// Relanzar las excepciones posteriores a la finalizaci�n
				if (completado) {
					tirar e;
				}

				// Propagar otros como resultados
				hecho (-1, e);
			}
		}

		// Devoluci�n de llamada para cuando todo est� hecho
		funci�n realizada (estado, nativeStatusText, respuestas, encabezados) {
			var es �xito, �xito, error, respuesta, modificado,
				statusText = nativeStatusText;

			// Ignora las invocaciones repetidas
			if (completado) {
				regreso;
			}

			completado = verdadero;

			// Borrar el tiempo de espera si existe
			if (timeoutTimer) {
				window.clearTimeout (timeoutTimer);
			}

			// Transporte de desreferencia para la recolecci�n temprana de basura
			// (no importa cu�nto tiempo se usar� el objeto jqXHR)
			transporte = indefinido;

			// Cach� los encabezados de respuesta
			responseHeadersString = encabezados || "";

			// Establecer readyState
			jqXHR.readyState = estado> 0? 4: 0;

			// Determinar si tiene �xito
			isSuccess = estado> = 200 && estado <300 || estado === 304;

			// Obtener datos de respuesta
			if (respuestas) {
				respuesta = ajaxHandleResponses (s, jqXHR, respuestas);
			}

			// Use un convertidor noop para el script faltante pero no si jsonp
			si (! isSuccess &&
				jQuery.inArray ("script", s.dataTypes)> -1 &&
				jQuery.inArray ("json", s.dataTypes) <0) {
				s.converters ["script de texto"] = function () {};
			}

			// Convierta pase lo que pase (de esa manera los campos responseXXX siempre se establecen)
			respuesta = ajaxConvert (s, respuesta, jqXHR, isSuccess);

			// Si tiene �xito, maneje el encadenamiento de tipos
			if (isSuccess) {

				// Establecer el encabezado If-Modified-Since y / o If-None-Match, si est� en modo ifModified.
				if (s.ifModified) {
					modificado = jqXHR.getResponseHeader ("�ltima modificaci�n");
					if (modificado) {
						jQuery.lastModified [cacheURL] = modificado;
					}
					modificado = jqXHR.getResponseHeader ("etag");
					if (modificado) {
						jQuery.etag [cacheURL] = modificado;
					}
				}

				// si no hay contenido
				if (estado === 204 || s.type === "HEAD") {
					statusText = "nocontent";

				// si no se modifica
				} else if (estado === 304) {
					statusText = "notmodified";

				// Si tenemos datos, vamos a convertirlos
				} dem�s {
					statusText = response.state;
					�xito = respuesta.datos;
					error = respuesta.error;
					isSuccess =! error;
				}
			} dem�s {

				// Extrae el error de statusText y normaliza para no abortos
				error = statusText;
				if (status ||! statusText) {
					statusText = "error";
					si (estado <0) {
						estado = 0;
					}
				}
			}

			// Establecer datos para el objeto xhr falso
			jqXHR.status = estado;
			jqXHR.statusText = (nativeStatusText || statusText) + "";

			// �xito / Error
			if (isSuccess) {
				deferred.resolveWith (callbackContext, [�xito, statusText, jqXHR]);
			} dem�s {
				deferred.rejectWith (callbackContext, [jqXHR, statusText, error]);
			}

			// devoluciones de llamada dependientes del estado
			jqXHR.statusCode (c�digo de estado);
			statusCode = undefined;

			if (fireGlobals) {
				globalEventContext.trigger (isSuccess? "ajaxSuccess": "ajaxError",
					[jqXHR, s, isSuccess? �xito: error]);
			}

			// Completo
			completeDeferred.fireWith (callbackContext, [jqXHR, statusText]);

			if (fireGlobals) {
				globalEventContext.trigger ("ajaxComplete", [jqXHR, s]);

				// Manejar el contador AJAX global
				if (! (--jQuery.active)) {
					jQuery.event.trigger ("ajaxStop");
				}
			}
		}

		return jqXHR;
	},

	getJSON: function (url, data, callback) {
		return jQuery.get (url, datos, devoluci�n de llamada, "json");
	},

	getScript: function (url, callback) {
		return jQuery.get (url, undefined, callback, "script");
	}
});

jQuery.each (["obtener", "publicar"], funci�n (_i, m�todo) {
	jQuery [m�todo] = funci�n (url, datos, devoluci�n de llamada, tipo) {

		// Cambiar argumentos si se omiti� el argumento de datos
		if (isFunction (datos)) {
			tipo = tipo || llamar de vuelta;
			devoluci�n de llamada = datos;
			datos = indefinido;
		}

		// La URL puede ser un objeto de opciones (que luego debe tener .url)
		return jQuery.ajax (jQuery.extend ({
			url: url,
			tipo: m�todo,
			dataType: tipo,
			datos: datos,
			�xito: devoluci�n de llamada
		}, jQuery.isPlainObject (url) && url));
	};
});

jQuery.ajaxPrefilter (funci�n (es) {
	var i;
	para (yo en los encabezados) {
		if (i.toLowerCase () === "tipo de contenido") {
			s.contentType = s.headers [i] || "";
		}
	}
});


jQuery._evalUrl = function (url, options, doc) {
	return jQuery.ajax ({
		url: url,

		// Haga esto expl�cito, ya que el usuario puede anularlo a trav�s de ajaxSetup (# 11264)
		tipo: "OBTENER",
		dataType: "script",
		cach�: verdadero,
		async: falso,
		global: falso,

		// Evaluar la respuesta solo si tiene �xito (gh-4126)
		// dataFilter no se invoca para respuestas de falla, por lo que se usa en su lugar
		// del convertidor predeterminado es kludgy pero funciona.
		convertidores: {
			"secuencia de comandos de texto": funci�n () {}
		},
		dataFilter: function (respuesta) {
			jQuery.globalEval (respuesta, opciones, doc);
		}
	});
};


jQuery.fn.extend ({
	wrapAll: function (html) {
		var wrap;

		si (este [0]) {
			if (isFunction (html)) {
				html = html.call (este [0]);
			}

			// Los elementos para envolver el objetivo
			wrap = jQuery (html, este [0] .ownerDocument) .eq (0) .clone (verdadero);

			si (este [0] .parentNode) {
				wrap.insertBefore (este [0]);
			}

			wrap.map (function () {
				var elem = esto;

				while (elem.firstElementChild) {
					elem = elem.firstElementChild;
				}

				return elem;
			}) .append (esto);
		}

		devuelve esto;
	},

	wrapInner: function (html) {
		if (isFunction (html)) {
			devuelve this.each (function (i) {
				jQuery (esto) .wrapInner (html.call (esto, i));
			});
		}

		devuelve this.each (function () {
			var self = jQuery (esto),
				contenido = self.contents ();

			if (contents.length) {
				contenido.wrapAll (html);

			} dem�s {
				self.append (html);
			}
		});
	},

	wrap: function (html) {
		var htmlIsFunction = isFunction (html);

		devuelve this.each (function (i) {
			jQuery (esto) .wrapAll (htmlIsFunction? html.call (esto, i): html);
		});
	},

	desenvolver: funci�n (selector) {
		this.parent (selector) .not ("body") .each (function () {
			jQuery (esto) .replaceWith (this.childNodes);
		});
		devuelve esto;
	}
});


jQuery.expr.pseudos.hidden = function (elem) {
	return! jQuery.expr.pseudos.visible (elem);
};
jQuery.expr.pseudos.visible = function (elem) {
	return !! (elem.offsetWidth || elem.offsetHeight || elem.getClientRects (). length);
};




jQuery.ajaxSettings.xhr = function () {
	intentar {
		devolver nueva ventana.XMLHttpRequest ();
	} atrapar (e) {}
};

var xhrSuccessStatus = {

		// El protocolo de archivo siempre produce el c�digo de estado 0, se supone 200
		0: 200,

		// Soporte: IE <= 9 solamente
		// # 1450: a veces IE devuelve 1223 cuando deber�a ser 204
		1223: 204
	},
	xhrSupported = jQuery.ajaxSettings.xhr ();

support.cors = !! xhrSupported && ("con credenciales" en xhrSupported);
support.ajax = xhrSupported = !! xhrSupported;

jQuery.ajaxTransport (funci�n (opciones) {
	var callback, errorCallback;

	// Dominio cruzado solo permitido si se admite a trav�s de XMLHttpRequest
	if (support.cors || xhrSupported &&! options.crossDomain) {
		regreso {
			enviar: funci�n (encabezados, completo) {
				var i,
					xhr = opciones.xhr ();

				xhr.open (
					options.type,
					options.url,
					options.async,
					options.username,
					options.password
				);

				// Aplicar campos personalizados si se proporcionan
				if (options.xhrFields) {
					para (i en options.xhrFields) {
						xhr [i] = opciones.xhrFields [i];
					}
				}

				// Anula el tipo de mime si es necesario
				if (options.mimeType && xhr.overrideMimeType) {
					xhr.overrideMimeType (options.mimeType);
				}

				// Encabezado X-Requested-With
				// Para solicitudes entre dominios, ya que las condiciones para una verificaci�n previa son
				// similar a un rompecabezas, simplemente nunca lo configuramos para estar seguros.
				// (siempre se puede configurar por solicitud o incluso usando ajaxSetup)
				// Para solicitudes del mismo dominio, no cambiar� el encabezado si ya se proporcion�.
				if (! options.crossDomain &&! headers ["X-Requested-With"]) {
					encabezados ["X-Requested-With"] = "XMLHttpRequest";
				}

				// Establecer encabezados
				para (i en encabezados) {
					xhr.setRequestHeader (i, encabezados [i]);
				}

				// Llamar de vuelta
				devoluci�n de llamada = funci�n (tipo) {
					funci�n de retorno () {
						if (devoluci�n de llamada) {
							callback = errorCallback = xhr.onload =
								xhr.onerror = xhr.onabort = xhr.ontimeout =
									xhr.onreadystatechange = null;

							if (escriba === "abortar") {
								xhr.abort ();
							} else if (escriba === "error") {

								// Soporte: IE <= 9 solamente
								// En un aborto nativo manual, IE9 lanza
								// errores en cualquier acceso a la propiedad que no est� readyState
								if (typeof xhr.status! == "number") {
									completo (0, "error");
								} dem�s {
									completo(

										// Archivo: el protocolo siempre produce el estado 0; ver # 8605, # 14207
										xhr.status,
										xhr.statusText
									);
								}
							} dem�s {
								completo(
									xhrSuccessStatus [xhr.status] || xhr.status,
									xhr.statusText,

									// Soporte: IE <= 9 solamente
									// IE9 no tiene XHR2 pero se lanza en binario (trac-11426)
									// Para XHR2 sin texto, deje que la persona que llama lo maneje (gh-2498)
									(xhr.responseType || "texto")! == "texto" ||
									typeof xhr.responseText! == "cadena"?
										{binary: xhr.response}:
										{texto: xhr.responseText},
									xhr.getAllResponseHeaders ()
								);
							}
						}
					};
				};

				// Escuche los eventos
				xhr.onload = devoluci�n de llamada ();
				errorCallback = xhr.onerror = xhr.ontimeout = callback ("error");

				// Soporte: solo IE 9
				// Use onreadystatechange para reemplazar onabort
				// para manejar abortos no detectados
				if (xhr.onabort! == undefined) {
					xhr.onabort = errorCallback;
				} dem�s {
					xhr.onreadystatechange = function () {

						// Verifique readyState antes del tiempo de espera a medida que cambia
						if (xhr.readyState === 4) {

							// Permitir que se llame primero a un error,
							// pero eso no manejar� un aborto nativo
							// Adem�s, guarda errorCallback en una variable
							// ya que no se puede acceder a xhr.onerror
							window.setTimeout (function () {
								if (devoluci�n de llamada) {
									errorCallback ();
								}
							});
						}
					};
				}

				// Crea la devoluci�n de llamada de aborto
				callback = callback ("abortar");

				intentar {

					// Env�e la solicitud (esto puede generar una excepci�n)
					xhr.send (options.hasContent && options.data || null);
				} captura (e) {

					// # 14683: Relanzar solo si a�n no se ha notificado como un error
					if (devoluci�n de llamada) {
						tirar e;
					}
				}
			},

			abortar: funci�n () {
				if (devoluci�n de llamada) {
					llamar de vuelta();
				}
			}
		};
	}
});




// Evitar la ejecuci�n autom�tica de scripts cuando no se proporcion� un tipo de datos expl�cito (Ver gh-2432)
jQuery.ajaxPrefilter (funci�n (es) {
	if (s.crossDomain) {
		s.contents.script = falso;
	}
});

// Instalar script dataType
jQuery.ajaxSetup ({
	acepta: {
		script: "texto / javascript, aplicaci�n / javascript," +
			"aplicaci�n / ecmascript, aplicaci�n / x-ecmascript"
	},
	contenido: {
		secuencia de comandos: / \ b (?: java | ecma) secuencia de comandos \ b /
	},
	convertidores: {
		"secuencia de comandos de texto": funci�n (texto) {
			jQuery.globalEval (texto);
			devolver texto;
		}
	}
});

// Manejar el caso especial de la cach� y crossDomain
jQuery.ajaxPrefilter ("script", funci�n (es) {
	if (s.cach� === indefinido) {
		s.cach� = falso;
	}
	if (s.crossDomain) {
		s.type = "OBTENER";
	}
});

// Enlazar el transporte de hack de etiquetas de script
jQuery.ajaxTransport ("script", funci�n (es) {

	// Este transporte solo se ocupa de solicitudes de dominio cruzado o forzadas por atributos
	if (s.crossDomain || s.scriptAttrs) {
		var script, devoluci�n de llamada;
		regreso {
			enviar: funci�n (_, completo) {
				script = jQuery ("<script>")
					.attr (s.scriptAttrs || {})
					.prop ({juego de caracteres: s.scriptCharset, src: s.url})
					.on ("error de carga", devoluci�n de llamada = funci�n (evt) {
						script.remove ();
						devoluci�n de llamada = nulo;
						si (evt) {
							completo (evt.type === "error"? 404: 200, evt.type);
						}
					});

				// Utilice la manipulaci�n DOM nativa para evitar nuestro enga�o domManip AJAX
				document.head.appendChild (script [0]);
			},
			abortar: funci�n () {
				if (devoluci�n de llamada) {
					llamar de vuelta();
				}
			}
		};
	}
});




var oldCallbacks = [],
	rjsonp = / (=) \? (? = & | $) | \? \? /;

// Configuraci�n predeterminada de jsonp
jQuery.ajaxSetup ({
	jsonp: "devoluci�n de llamada",
	jsonpCallback: function () {
		var callback = oldCallbacks.pop () || (jQuery.expando + "_" + (nonce.guid ++));
		esta [devoluci�n de llamada] = verdadero;
		devolver la devoluci�n de llamada;
	}
});

// Detectar, normalizar opciones e instalar devoluciones de llamada para solicitudes jsonp
jQuery.ajaxPrefilter ("json jsonp", funci�n (s, originalSettings, jqXHR) {

	var callbackName, overwritten, responseContainer,
		jsonProp = s.jsonp! == false && (rjsonp.test (s.url)?
			"url":
			typeof s.data === "cadena" &&
				(s.contentType || "")
					.indexOf ("application / x-www-form-urlencoded") === 0 &&
				rjsonp.test (s.data) && "datos"
		);

	// Manejar si el tipo de datos esperado es "jsonp" o tenemos un par�metro para establecer
	if (jsonProp || s.dataTypes [0] === "jsonp") {

		// Obtiene el nombre de la devoluci�n de llamada, recordando el valor preexistente asociado con �l
		callbackName = s.jsonpCallback = isFunction (s.jsonpCallback)?
			s.jsonpCallback ():
			s.jsonpCallback;

		// Insertar devoluci�n de llamada en url o datos de formulario
		if (jsonProp) {
			s [jsonProp] = s [jsonProp] .replace (rjsonp, "$ 1" + callbackName);
		} m�s si (s.jsonp! == falso) {
			s.url + = (rquery.test (s.url)? "&": "?") + s.jsonp + "=" + callbackName;
		}

		// Utilice el convertidor de datos para recuperar json despu�s de la ejecuci�n del script
		s.converters ["script json"] = function () {
			if (! responseContainer) {
				jQuery.error (callbackName + "no fue llamado");
			}
			return responseContainer [0];
		};

		// Forzar el tipo de datos json
		s.dataTypes [0] = "json";

		// Instalar devoluci�n de llamada
		overwritten = window [callbackName];
		ventana [callbackName] = function () {
			responseContainer = argumentos;
		};

		// Funci�n de limpieza (se activa despu�s de los convertidores)
		jqXHR.always (function () {

			// Si el valor anterior no exist�a, elim�nelo
			if (sobrescrito === indefinido) {
				jQuery (ventana) .removeProp (callbackName);

			// De lo contrario, restaura el valor preexistente
			} dem�s {
				ventana [callbackName] = sobrescrito;
			}

			// Guardar como gratis
			if (s [callbackName]) {

				// Aseg�rate de que reutilizar las opciones no arruine las cosas
				s.jsonpCallback = originalSettings.jsonpCallback;

				// Guarde el nombre de la devoluci�n de llamada para uso futuro
				oldCallbacks.push (callbackName);
			}

			// Llamar si era una funci�n y tenemos una respuesta
			if (responseContainer && isFunction (sobrescrito)) {
				sobrescrito (responseContainer [0]);
			}

			responseContainer = overwritten = undefined;
		});

		// Delegar al script
		return "script";
	}
});




// Soporte: solo Safari 8
// En Safari 8 documentos creados a trav�s de document.implementation.createHTMLDocument
// colapsar formas hermanas: la segunda se convierte en hija de la primera.
// Por eso, esta medida de seguridad debe estar desactivada en Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
support.createHTMLDocument = (function () {
	var body = document.implementation.createHTMLDocument ("") .body;
	body.innerHTML = "<form> </form> <form> </form>";
	return body.childNodes.length === 2;
}) ();


// El argumento "datos" debe ser una cadena de html
// contexto (opcional): si se especifica, el fragmento se crear� en este contexto,
// predeterminado para documentar
// keepScripts (opcional): si es verdadero, incluir� los scripts pasados ??en la cadena html
jQuery.parseHTML = funci�n (datos, contexto, keepScripts) {
	if (typeof data! == "string") {
		regreso [];
	}
	if (tipo de contexto === "booleano") {
		keepScripts = contexto;
		contexto = falso;
	}

	var base, parsed, scripts;

	if (! context) {

		// Detenga la ejecuci�n inmediata de scripts o controladores de eventos en l�nea
		// usando document.implementation
		if (support.createHTMLDocument) {
			context = document.implementation.createHTMLDocument ("");

			// Establecer el href base para el documento creado
			// por lo que cualquier elemento analizado con URL
			// se basan en la URL del documento (gh-2965)
			base = context.createElement ("base");
			base.href = document.location.href;
			context.head.appendChild (base);
		} dem�s {
			contexto = documento;
		}
	}

	analizado = rsingleTag.exec (datos);
	scripts =! keepScripts && [];

	// Etiqueta �nica
	if (analizado) {
		return [context.createElement (analizado [1])];
	}

	analizado = buildFragment ([datos], contexto, scripts);

	if (scripts && scripts.length) {
		jQuery (scripts) .remove ();
	}

	return jQuery.merge ([], parsed.childNodes);
};


/ **
 * Cargar una URL en una p�gina
 * /
jQuery.fn.load = function (url, params, callback) {
	var selector, tipo, respuesta,
		self = esto,
		off = url.indexOf ("");

	if (desactivado> -1) {
		selector = stripAndCollapse (url.slice (off));
		url = url.slice (0, desactivado);
	}

	// Si es una funci�n
	if (isFunction (params)) {

		// Asumimos que es la devoluci�n de llamada
		callback = params;
		params = indefinido;

	// De lo contrario, construya una cadena de par�metros
	} else if (params && typeof params === "object") {
		type = "POST";
	}

	// Si tenemos elementos para modificar, realiza la solicitud
	if (self.length> 0) {
		jQuery.ajax ({
			url: url,

			// Si la variable "tipo" no est� definida, se utilizar� el m�todo "GET".
			// Hacer expl�cito el valor de este campo ya que
			// el usuario puede anularlo a trav�s del m�todo ajaxSetup
			tipo: tipo || "OBTENER",
			dataType: "html",
			datos: params
		}) .done (function (responseText) {

			// Guarde la respuesta para usarla en la devoluci�n de llamada completa
			respuesta = argumentos;

			self.html (selector?

				// Si se especific� un selector, ubique los elementos correctos en un div ficticio
				// Excluir scripts para evitar errores de 'Permiso denegado' de IE
				jQuery ("<div>") .append (jQuery.parseHTML (responseText)) .find (selector):

				// De lo contrario, use el resultado completo
				responseText);

		// Si la solicitud tiene �xito, esta funci�n obtiene "datos", "estado", "jqXHR"
		// pero se ignoran porque la respuesta se estableci� arriba.
		// Si falla, esta funci�n obtiene "jqXHR", "status", "error"
		}). siempre (devoluci�n de llamada && funci�n (jqXHR, estado) {
			self.each (function () {
				callback.apply (esto, respuesta || [jqXHR.responseText, estado, jqXHR]);
			});
		});
	}

	devuelve esto;
};




jQuery.expr.pseudos.animated = function (elem) {
	return jQuery.grep (jQuery.timers, function (fn) {
		return elem === fn.elem;
	} ).largo;
};




jQuery.offset = {
	setOffset: function (elem, options, i) {
		var curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
			position = jQuery.css (elem, "position"),
			curElem = jQuery (elem),
			props = {};

		// Establecer la posici�n primero, en caso de que la parte superior / izquierda se establezcan incluso en elementos est�ticos
		si (posici�n === "est�tica") {
			elem.style.position = "relativo";
		}

		curOffset = curElem.offset ();
		curCSSTop = jQuery.css (elem, "arriba");
		curCSSLeft = jQuery.css (elem, "izquierda");
		calcularPosici�n = (posici�n === "absoluta" || posici�n === "fija") &&
			(curCSSTop + curCSSLeft) .indexOf ("auto")> -1;

		// Necesito poder calcular la posici�n si
		// la parte superior o izquierda es autom�tica y la posici�n es absoluta o fija
		if (calculatePosition) {
			curPosition = curElem.position ();
			curTop = curPosition.top;
			curLeft = curPosition.left;

		} dem�s {
			curTop = parseFloat (curCSSTop) || 0;
			curLeft = parseFloat (curCSSLeft) || 0;
		}

		if (isFunction (opciones)) {

			// Use jQuery.extend aqu� para permitir la modificaci�n del argumento de coordenadas (gh-1848)
			opciones = opciones.call (elem, i, jQuery.extend ({}, curOffset));
		}

		if (options.top! = null) {
			props.top = (options.top - curOffset.top) + curTop;
		}
		if (options.left! = null) {
			props.left = (options.left - curOffset.left) + curLeft;
		}

		if ("usar" en opciones) {
			options.using.call (elem, props);

		} dem�s {
			curElem.css (apoyos);
		}
	}
};

jQuery.fn.extend ({

	// offset () relaciona el cuadro de borde de un elemento con el origen del documento
	offset: function (opciones) {

		// Preservar el encadenamiento para el colocador
		if (argumentos.longitud) {
			opciones de retorno === indefinido?
				esto :
				this.each (funci�n (i) {
					jQuery.offset.setOffset (esto, opciones, i);
				});
		}

		var rect, ganar,
			elem = este [0];

		si (! elem) {
			regreso;
		}

		// Devuelve ceros para elementos desconectados y ocultos (mostrar: ninguno) (gh-2310)
		// Soporte: IE <= 11 solamente
		// Ejecutando getBoundingClientRect en un
		// el nodo desconectado en IE arroja un error
		if (! elem.getClientRects (). length) {
			return {top: 0, left: 0};
		}

		// Obtenga la posici�n relativa al documento agregando el desplazamiento de la ventana gr�fica a gBCR relativa a la ventana gr�fica
		rect = elem.getBoundingClientRect ();
		win = elem.ownerDocument.defaultView;
		regreso {
			arriba: rect.top + win.pageYOffset,
			izquierda: rect.left + win.pageXOffset
		};
	},

	// position () relaciona el cuadro de margen de un elemento con el cuadro de relleno de su padre compensado
	// Esto corresponde al comportamiento del posicionamiento absoluto de CSS
	posici�n: funci�n () {
		si (! esto [0]) {
			regreso;
		}

		var offsetParent, offset, doc,
			elem = esto [0],
			parentOffset = {top: 0, left: 0};

		// posici�n: los elementos fijos est�n desplazados desde la ventana gr�fica, que a su vez siempre tiene un desplazamiento cero
		if (jQuery.css (elem, "posici�n") === "fijo") {

			// Asumir posici�n: fija implica disponibilidad de getBoundingClientRect
			offset = elem.getBoundingClientRect ();

		} dem�s {
			offset = this.offset ();

			// Cuenta para el padre de compensaci�n * real *, que puede ser el documento o su elemento ra�z
			// cuando se identifica un elemento posicionado est�ticamente
			doc = elem.ownerDocument;
			offsetParent = elem.offsetParent || doc.documentElement;
			while (offsetParent &&
				(offsetParent === doc.body || offsetParent === doc.documentElement) &&
				jQuery.css (offsetParent, "position") === "static") {

				offsetParent = offsetParent.parentNode;
			}
			if (offsetParent && offsetParent! == elem && offsetParent.nodeType === 1) {

				// Incorporar bordes en su desplazamiento, ya que est�n fuera de su origen de contenido
				parentOffset = jQuery (offsetParent) .offset ();
				parentOffset.top + = jQuery.css (offsetParent, "borderTopWidth", verdadero);
				parentOffset.left + = jQuery.css (offsetParent, "borderLeftWidth", verdadero);
			}
		}

		// Restar compensaciones principales y m�rgenes de elementos
		regreso {
			arriba: offset.top - parentOffset.top - jQuery.css (elem, "marginTop", true),
			left: offset.left - parentOffset.left - jQuery.css (elem, "marginLeft", true)
		};
	},

	// Este m�todo devolver� documentElement en los siguientes casos:
	// 1) Para el elemento dentro del iframe sin offsetParent, este m�todo devolver�
	// documentElement de la ventana principal
	// 2) Para el elemento oculto o separado
	// 3) Para el cuerpo o el elemento html, es decir, en el caso del nodo html, se devolver� a s� mismo.
	//
	// pero esas excepciones nunca se presentaron como casos de uso de la vida real
	// y podr�an considerarse resultados m�s preferibles.
	//
	// Esta l�gica, sin embargo, no est� garantizada y puede cambiar en cualquier momento en el futuro
	offsetParent: function () {
		devuelve this.map (function () {
			var offsetParent = this.offsetParent;

			while (offsetParent && jQuery.css (offsetParent, "position") === "static") {
				offsetParent = offsetParent.offsetParent;
			}

			return offsetParent || documentElement;
		});
	}
});

// Crea m�todos scrollLeft y scrollTop
jQuery.each ({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function (m�todo, prop) {
	var top = "pageYOffset" === prop;

	jQuery.fn [m�todo] = funci�n (val) {
		return access (this, function (elem, method, val) {

			// Fusionar documentos y ventanas
			var win;
			if (isWindow (elem)) {
				ganar = elem;
			} else if (elem.nodeType === 9) {
				win = elem.defaultView;
			}

			if (val === undefined) {
				volver a ganar? win [prop]: elem [m�todo];
			}

			si (gana) {
				win.scrollTo (
					!cima ? val: win.pageXOffset,
					cima ? val: win.pageYOffset
				);

			} dem�s {
				elem [m�todo] = val;
			}
		}, m�todo, val, argumentos.longitud);
	};
});

// Soporte: Safari <= 7 - 9.1, Chrome <= 37 - 49
// Agrega los cssHooks superior / izquierdo usando jQuery.fn.position
// Error de Webkit: https://bugs.webkit.org/show_bug.cgi?id=29084
// Error de parpadeo: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
// getComputedStyle devuelve el porcentaje cuando se especifica para arriba / izquierda / abajo / derecha;
// en lugar de hacer que el m�dulo css dependa del m�dulo de compensaci�n, solo compru�balo aqu�
jQuery.each (["arriba", "izquierda"], funci�n (_i, prop) {
	jQuery.cssHooks [prop] = addGetHookIf (support.pixelPosition,
		function (elem, calculado) {
			if (calculado) {
				calculado = curCSS (elem, prop);

				// Si curCSS devuelve un porcentaje, retrocede para compensar
				return rnumnonpx.test (calculado)?
					jQuery (elem) .position () [prop] + "px":
					calculado
			}
		}
	);
});


// Crea los m�todos innerHeight, innerWidth, height, width, outerHeight y outerWidth
jQuery.each ({Alto: "alto", Ancho: "ancho"}, funci�n (nombre, tipo) {
	jQuery.each ({
		padding: "inner" + nombre,
		tipo de contenido,
		"": "exterior" + nombre
	}, funci�n (defaultExtra, funcName) {

		// El margen es solo para outerHeight, outerWidth
		jQuery.fn [funcName] = funci�n (margen, valor) {
			var encadenable = argumentos.longitud && (defaultExtra || typeof margin! == "boolean"),
				extra = defaultExtra || (margen === verdadero || valor === verdadero? "margen": "borde");

			acceso de retorno (esto, funci�n (elem, tipo, valor) {
				var doc;

				if (isWindow (elem)) {

					// $ (ventana) .outerWidth / Alto retorno w / h incluyendo barras de desplazamiento (gh-1729)
					return funcName.indexOf ("externo") === 0?
						elem ["interno" + nombre]:
						elem.document.documentElement ["cliente" + nombre];
				}

				// Obtener el ancho o el alto del documento
				if (elem.nodeType === 9) {
					doc = elem.documentElement;

					// Despl�cese [Ancho / Alto] o desplace [Ancho / Alto] o cliente [Ancho / Alto],
					// el que sea mayor
					devolver Math.max (
						elem.body ["scroll" + nombre], doc ["scroll" + nombre],
						elem.body ["offset" + nombre], doc ["offset" + nombre],
						doc ["cliente" + nombre]
					);
				}

				valor de retorno === indefinido?

					// Obtiene el ancho o alto del elemento, solicitando pero no forzando parseFloat
					jQuery.css (elem, tipo, extra):

					// Establecer ancho o alto en el elemento
					jQuery.style (elem, tipo, valor, extra);
			}, tipo, encadenable? margen: indefinido, encadenable);
		};
	});
});


jQuery.each ([
	"ajaxStart",
	"ajaxStop",
	"ajaxComplete",
	"ajaxError",
	"ajaxSuccess",
	"ajaxSend"
], funci�n (_i, tipo) {
	jQuery.fn [tipo] = funci�n (fn) {
		return this.on (tipo, fn);
	};
});




jQuery.fn.extend ({

	enlazar: funci�n (tipos, datos, fn) {
		return this.on (tipos, nulo, datos, fn);
	},
	desvincular: funci�n (tipos, fn) {
		return this.off (tipos, nulo, fn);
	},

	delegado: funci�n (selector, tipos, datos, fn) {
		return this.on (tipos, selector, datos, fn);
	},
	undelegate: function (selector, tipos, fn) {

		// (espacio de nombres) o (selector, tipos [, fn])
		devolver argumentos.longitud === 1?
			this.off (selector, "**"):
			this.off (tipos, selector || "**", fn);
	},

	hover: function (fnOver, fnOut) {
		return this.mouseenter (fnOver) .mouseleave (fnOut || fnOver);
	}
});

jQuery.each (
	("desenfoque enfoque focusin focusout cambiar el tama�o desplazarse haga clic doble clic" +
	"mousedown mouseup mousemove mouseover mouseout mouseout mouseenter mouseleave" +
	"cambiar seleccionar enviar keydown keypress keyup contextmenu") .split (""),
	funci�n (_i, nombre) {

		// Manejar el enlace de eventos
		jQuery.fn [nombre] = funci�n (datos, fn) {
			devolver argumentos.longitud> 0?
				this.on (nombre, nulo, datos, fn):
				this.trigger (nombre);
		};
	}
);




// Soporte: Android <= 4.0 solamente
// Aseg�rese de recortar la lista de materiales y la NBSP
var rtrim = / ^ [\ s \ uFEFF \ xA0] + | [\ s \ uFEFF \ xA0] + $ / g;

// Vincular una funci�n a un contexto, opcionalmente aplicando parcialmente cualquier
// argumentos.
// jQuery.proxy est� en desuso para promover est�ndares (espec�ficamente Function # bind)
// Sin embargo, no est� previsto que se elimine pronto
jQuery.proxy = funci�n (fn, contexto) {
	var tmp, args, proxy;

	si (tipo de contexto === "cadena") {
		tmp = fn [contexto];
		contexto = fn;
		fn = tmp;
	}

	// Comprobaci�n r�pida para determinar si el objetivo es invocable, en la especificaci�n
	// esto arroja un TypeError, pero solo devolveremos undefined.
	if (! isFunction (fn)) {
		volver indefinido;
	}

	// Enlace simulado
	args = slice.call (argumentos, 2);
	proxy = funci�n () {
		return fn.apply (contexto || esto, args.concat (slice.call (argumentos)));
	};

	// Establece el guid del manejador �nico al mismo del manejador original, para que pueda ser eliminado
	proxy.guid = fn.guid = fn.guid || jQuery.guid ++;

	proxy de retorno;
};

jQuery.holdReady = function (hold) {
	si (mantener) {
		jQuery.readyWait ++;
	} dem�s {
		jQuery.ready (verdadero);
	}
};
jQuery.isArray = Array.isArray;
jQuery.parseJSON = JSON.parse;
jQuery.nodeName = nodeName;
jQuery.isFunction = isFunction;
jQuery.isWindow = isWindow;
jQuery.camelCase = camelCase;
jQuery.type = toType;

jQuery.now = Date.now;

jQuery.isNumeric = function (obj) {

	// A partir de jQuery 3.0, isNumeric est� limitado a
	// cadenas y n�meros (primitivas u objetos)
	// que se puede forzar a n�meros finitos (gh-2662)
	var tipo = jQuery.type (obj);
	return (tipo === "n�mero" || tipo === "cadena") &&

		// parseFloat NaNs falsos positivos de conversi�n num�rica ("")
		// ... pero malinterpreta las cadenas de n�meros iniciales, particularmente los literales hexadecimales ("0x ...")
		// la resta fuerza infinitos a NaN
		! isNaN (obj - parseFloat (obj));
};

jQuery.trim = function (text) {
	devolver texto == nulo?
		"":
		(texto + "") .replace (rtrim, "");
};



// Reg�strese como un m�dulo AMD con nombre, ya que jQuery se puede concatenar con otros
// archivos que pueden usar define, pero no a trav�s de un script de concatenaci�n adecuado que
// comprende los m�dulos AMD an�nimos. Una AMD con nombre es la m�s segura y robusta
// forma de registrarse. Se usa jquery en min�sculas porque los nombres de los m�dulos AMD son
// derivado de los nombres de los archivos, y jQuery normalmente se entrega en min�sculas
// Nombre del archivo. Haga esto despu�s de crear el global para que si un m�dulo AMD quiere
// para llamar a noConflict para ocultar esta versi�n de jQuery, funcionar�.

// Tenga en cuenta que para una m�xima portabilidad, las bibliotecas que no son jQuery deben
// se declaran a s� mismos como m�dulos an�nimos y evitan establecer un global si un
// El cargador AMD est� presente. jQuery es un caso especial. Para m�s informaci�n, ver
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if (typeof define === "funci�n" && define.amd) {
	define ("jquery", [], function () {
		return jQuery;
	});
}




var

	// Mapa sobre jQuery en caso de sobrescribir
	_jQuery = window.jQuery,

	// Mapa sobre el $ en caso de sobrescribir
	_ $ = ventana. $;

jQuery.noConflict = function (deep) {
	if (ventana. $ === jQuery) {
		ventana. $ = _ $;
	}

	if (deep && window.jQuery === jQuery) {
		window.jQuery = _jQuery;
	}

	return jQuery;
};

// Exponer jQuery y $ identificadores, incluso en AMD
// (# 7102 # comentario: 10, https://github.com/jquery/jquery/pull/557)
// y CommonJS para emuladores de navegador (# 13566)
if (typeof noGlobal === "undefined") {
	window.jQuery = ventana. $ = jQuery;
}




return jQuery;
});