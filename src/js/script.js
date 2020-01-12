'use strict'

/**
 * CSS
 */
import '../scss/style.scss'

/**
 * Polyfill
 */
import elementClosest from 'element-closest'
elementClosest(window)

/**
 * Script
 */
import _Accordion from './_module/Accordion'
new _Accordion()
