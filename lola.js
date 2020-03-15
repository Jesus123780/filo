(function () {
  'use strict';

  class $ {
    /**
            * Obtiene el primer elemento que coincida con la clase usada.
            * @param {!string} clase
            * @return {Element}
            */
    static obtenerElementoPorClase(clase) {
      return document.getElementsByClassName(clase)[0];
    }}


  class Cabecera {
    /**
                   * Clase Cabecera, encargada de las animaciones de la cabecera.
                   * @constructor
                   */
    constructor() {
      /**
                    * Elemento principal de la clase.
                    * @type {Element}
                    */
      this.el = $.obtenerElementoPorClase('cabecera');

      /**
                                                        * Mapa de los sub elementos a animar
                                                        * @type {Object.<string, Element>}
                                                        */
      this.elementos = {
        contenido: $.obtenerElementoPorClase('cabecera__contenido'),
        boton: $.obtenerElementoPorClase('boton'),
        fondo: $.obtenerElementoPorClase('cabecera__fondo--nitido') };


      /**
                                                                        * Indica si la cabecera está o no encogida.
                                                                        * @type {boolean}
                                                                        */
      this.encogida = false;

      /**
                              * Diccionario de Tweens
                              * @type {Object}
                              */
      this.tweens = {
        contenido: {
          tween: null,
          px: 200 },

        boton: {
          tween: null,
          px: 100 },

        fondo: {
          tween: null,
          px: 250 } };



      /**
                        * Umbral sobre el cual la cabecera se encoge/agranda. Debe coincidir con
                        * $tamano-encogida en el CSS.
                        * @type {number}
                        */
      this.umbralCabecera = 225;

      /**
                                  * Clases CSS para decoración.
                                  * @type {Object.<string, string>}
                                  * @const
                                  */
      this.CLASES = {
        CABECERA_ENCOGIDA: 'cabecera--encogida' };


      /**
                                                    * Función enScroll pero con this siempre la instancia.
                                                    * @type {(function(this:Cabecera))|any}
                                                    */
      this.enScroll = this.enScroll_.bind(this);

      window.addEventListener('scroll', this.enScroll);

      this.crearTweens();
      this.enScroll();
    }

    /**
       * Función encargada de crear los tweens
       */
    crearTweens() {
      let configTween = {
        paused: true,
        css: {
          opacity: 0 },

        ease: Cubic.easeInOut };


      this.tweens.contenido.tween =
      TweenLite.to(this.elementos.contenido, 1, configTween);
      this.tweens.boton.tween =
      TweenLite.to(this.elementos.boton, 1, configTween);
      this.tweens.fondo.tween =
      TweenLite.to(this.elementos.fondo, 1, configTween);
    }

    /**
       * Función que reacciona al scroll del usuario. Si no está encogida y 
       * excede el umbral, se encoge. En caso de estar encogida y estar por
       * debajo del umbral, se agranda.
       * @private
       */
    enScroll_() {
      var posicionY = window.pageYOffset;

      if (!this.encogida) {
        if (posicionY >= this.umbralCabecera) {
          this.encoger();
        }
      } else {
        if (posicionY <= this.umbralCabecera) {
          this.agrandar();
        }
      }

      this.actualizarTweens(posicionY);
    }

    /**
       * Actualiza todos los tweens de la cabecera dependiendo del porcentaje
       * respecto al scroll en que se encuentre. No subirá por encima de 1 ni
       * bajará por debajo de 0.
       * @param {!number} posicion
       */
    actualizarTweens(posicion) {
      for (let nombreTween in this.tweens) {
        if (this.tweens.hasOwnProperty(nombreTween)) {
          let objetoTween = this.tweens[nombreTween];
          let progresoTween = 1 / objetoTween.px * posicion;

          if (progresoTween > 1) {
            objetoTween.tween.progress(1);
          } else if (progresoTween < 0) {
            objetoTween.tween.progress(0);
          } else {
            objetoTween.tween.progress(progresoTween);
          }
        }
      }
    }

    /**
       * Agranda la cabecera.
       */
    agrandar() {
      this.el.classList.remove(this.CLASES.CABECERA_ENCOGIDA);
      this.encogida = false;
    }

    /**
       * Achica la cabecera
       */
    encoger() {
      this.el.classList.add(this.CLASES.CABECERA_ENCOGIDA);
      this.encogida = true;
    }}


  let cabecera = new Cabecera();
})();