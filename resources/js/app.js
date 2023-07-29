import './bootstrap'
// Core Js
import jQuery from 'jquery'
import 'tw-elements'

import SimpleBar from 'simplebar'
import 'simplebar/dist/simplebar.css'

// animate css
import 'animate.css'

// You will need a ResizeObserver polyfill for browsers that don't support it! (iOS Safari, Edge, ...)
import ResizeObserver from 'resize-observer-polyfill'
import leaflet from 'leaflet'
import { Calendar } from '@fullcalendar/core'
import dayGridPlugin from '@fullcalendar/daygrid'
import timeGridPlugin from '@fullcalendar/timegrid'
import listPlugin from '@fullcalendar/list'
// OWL CAROUSEL
// import 'owl.carousel/dist/assets/owl.carousel.css';
// import 'owl.carousel';
import Cleave from 'cleave.js'
import cleave from 'cleave.js'
import * as Chart from 'chart.js'
import ApexCharts from 'apexcharts'
import 'country-select-js'

// Drag and Drop for kenban
import dragula from 'dragula/dist/dragula'
import 'dragula/dist/dragula.css'
// Icon
import 'iconify-icon'

// SweetAlert
import Swal from 'sweetalert2'
// tooltip and popover
import tippy from 'tippy.js'
import 'tippy.js/dist/tippy.css'
// DATA-TABLE
import DataTable from 'datatables.net-dt'
// jQuery validation
import validate from 'jquery-validation'

window.$ = jQuery
window.jQuery = jQuery

window.SimpleBar = SimpleBar

window.ResizeObserver = ResizeObserver

window.leaflet = leaflet

window.Calendar = Calendar
window.dayGridPlugin = dayGridPlugin
window.timeGridPlugin = timeGridPlugin
window.listPlugin = listPlugin

window.Cleave = Cleave

window.Chart = Chart

window.ApexCharts = ApexCharts

window.dragula = dragula

window.Swal = Swal

window.tippy = tippy

window.DataTable = DataTable

window.cleave = cleave

window.validate = validate

import.meta.glob(['../images/**'])
