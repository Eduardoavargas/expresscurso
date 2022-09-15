<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Express Cursos - Valide seu voucher</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ url('css/favicon.jpg') }}">
    <link href="{{ mix('css/app-guest.css') }}" rel="stylesheet">

    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}


    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            color: #9ca3af
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [multiple],
        [type=date],
        [type=datetime-local],
        [type=email],
        [type=month],
        [type=number],
        [type=password],
        [type=search],
        [type=tel],
        [type=text],
        [type=time],
        [type=url],
        [type=week],
        select,
        textarea {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            border-color: #6b7280;
            border-width: 1px;
            border-radius: 0;
            padding-top: .5rem;
            padding-right: .75rem;
            padding-bottom: .5rem;
            padding-left: .75rem;
            font-size: 1rem;
            line-height: 1.5rem;
            --tw-shadow: 0 0 #0000
        }

        [multiple]:focus,
        [type=date]:focus,
        [type=datetime-local]:focus,
        [type=email]:focus,
        [type=month]:focus,
        [type=number]:focus,
        [type=password]:focus,
        [type=search]:focus,
        [type=tel]:focus,
        [type=text]:focus,
        [type=time]:focus,
        [type=url]:focus,
        [type=week]:focus,
        select:focus,
        textarea:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #2563eb;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            border-color: #2563eb
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            color: #6b7280;
            opacity: 1
        }

        input::placeholder,
        textarea::placeholder {
            color: #6b7280;
            opacity: 1
        }

        ::-webkit-datetime-edit-fields-wrapper {
            padding: 0
        }

        ::-webkit-date-and-time-value {
            min-height: 1.5em
        }

        ::-webkit-datetime-edit,
        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-meridiem-field,
        ::-webkit-datetime-edit-millisecond-field,
        ::-webkit-datetime-edit-minute-field,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-second-field,
        ::-webkit-datetime-edit-year-field {
            padding-top: 0;
            padding-bottom: 0
        }

        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right .5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            print-color-adjust: exact
        }

        [multiple] {
            background-image: initial;
            background-position: initial;
            background-repeat: unset;
            background-size: initial;
            padding-right: .75rem;
            -webkit-print-color-adjust: unset;
            color-adjust: unset;
            print-color-adjust: unset
        }

        [type=checkbox],
        [type=radio] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding: 0;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            print-color-adjust: exact;
            display: inline-block;
            vertical-align: middle;
            background-origin: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            flex-shrink: 0;
            height: 1rem;
            width: 1rem;
            color: #2563eb;
            background-color: #fff;
            border-color: #6b7280;
            border-width: 1px;
            --tw-shadow: 0 0 #0000
        }

        [type=checkbox] {
            border-radius: 0
        }

        [type=radio] {
            border-radius: 100%
        }

        [type=checkbox]:focus,
        [type=radio]:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty,
                    /*!*/
                    /*!*/
                );
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #2563eb;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
        }

        [type=checkbox]:checked,
        [type=radio]:checked {
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat
        }

        [type=checkbox]:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e")
        }

        [type=radio]:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e")
        }

        [type=checkbox]:checked:focus,
        [type=checkbox]:checked:hover,
        [type=radio]:checked:focus,
        [type=radio]:checked:hover {
            border-color: transparent;
            background-color: currentColor
        }

        [type=checkbox]:indeterminate {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat
        }

        [type=checkbox]:indeterminate:focus,
        [type=checkbox]:indeterminate:hover {
            border-color: transparent;
            background-color: currentColor
        }

        [type=file] {
            background: unset;
            border-color: inherit;
            border-width: 0;
            border-radius: 0;
            padding: 0;
            font-size: unset;
            line-height: inherit
        }

        [type=file]:focus {
            outline: 1px solid ButtonText;
            outline: 1px auto -webkit-focus-ring-color
        }

        *,
        ::after,
        ::before {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .inset-0 {
            top: 0;
            right: 0;
            bottom: 0;
            left: 0
        }

        .inset-y-0 {
            top: 0;
            bottom: 0
        }

        .right-4 {
            right: 1rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .mb-0 {
            margin-bottom: 0
        }

        .ml-2 {
            margin-left: .5rem
        }

        .ml-3 {
            margin-left: .75rem
        }

        .inline-block {
            display: inline-block
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .h-64 {
            height: 16rem
        }

        .h-full {
            height: 100%
        }

        .h-5 {
            height: 1.25rem
        }

        .w-full {
            width: 100%
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-lg {
            max-width: 32rem
        }

        .max-w-xl {
            max-width: 36rem
        }

        .flex-wrap {
            flex-wrap: wrap
        }

        .items-center {
            align-items: center
        }

        .justify-between {
            justify-content: space-between
        }

        .space-y-4>:not([hidden])~:not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1rem * var(--tw-space-y-reverse))
        }

        .scroll-smooth {
            scroll-behavior: smooth
        }

        .rounded-global {
            border-radius: 5px
        }

        .border-2 {
            border-width: 2px
        }

        .bg-\[\#f5f5f5\] {
            --tw-bg-opacity: 1;
            background-color: rgb(245 245 245 / var(--tw-bg-opacity))
        }

        .bg-blue-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(219 234 254 / var(--tw-bg-opacity))
        }

        .bg-blue-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(59 130 246 / var(--tw-bg-opacity))
        }

        .object-cover {
            -o-object-fit: cover;
            object-fit: cover
        }

        .p-3 {
            padding: .75rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem
        }

        .px-10 {
            padding-left: 2.5rem;
            padding-right: 2.5rem
        }

        .py-2 {
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .pr-12 {
            padding-right: 3rem
        }

        .text-center {
            text-align: center
        }

        .font-body {
            font-family: DM Sans, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
        }

        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem
        }

        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem
        }

        .font-bold {
            font-weight: 700
        }

        .font-medium {
            font-weight: 500
        }

        .text-\[\#000\] {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .dark .dark\:bg-\[\#64748b\] {
            --tw-bg-opacity: 1;
            background-color: rgb(100 116 139 / var(--tw-bg-opacity))
        }

        .dark .dark\:text-\[\#fff\] {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        @media (min-width:640px) {
            .sm\:h-96 {
                height: 24rem
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .sm\:text-4xl {
                font-size: 2.25rem;
                line-height: 2.5rem
            }
        }

        @media (min-width:1024px) {
            .lg\:h-screen {
                height: 100vh
            }

            .lg\:h-full {
                height: 100%
            }

            .lg\:w-1\/2 {
                width: 50%
            }

            .lg\:items-center {
                align-items: center
            }

            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }

            .lg\:py-24 {
                padding-top: 6rem;
                padding-bottom: 6rem
            }
        }

        h1,
        h1 *,
        h2,
        h2 *,
        h3,
        h3 *,
        h4,
        h4 *,
        h5,
        h5 *,
        h6,
        h6 * {
            letter-spacing: -.05em;
            font-family: "DM Sans", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
        }
    </style>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="font-body antialiased text-[#000] bg-[#f5f5f5] dark:text-[#fff] dark:bg-[#64748b]">
    <section class="relative flex flex-wrap lg:h-screen lg:items-center">
        <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-full">
            {{-- <img alt="No alt"
                src="{{ url('curso-online.jpeg') }}" class="absolute inset-0 object-cover w-full h-full bg-blue-100 " /> --}}
            <img alt="No alt" src="{{ url('img/logo-express-cursos.jpeg') }}"
                class="absolute inset-0 object-fill w-full h-full" />
        </div>
        <div class="w-full px-4 py-12 lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24">
            <div class="max-w-lg mx-auto text-center">
                <h1 class="text-3xl font-bold sm:text-4xl">Ativação realizada com sucesso!</h1>
            </div>
            <div class="max-w-xl mx-auto mt-8 mb-0 space-y-4">
                <div class="relative form-field">
                    <span>Nome: {{$aluno->nome}}</span>
                </div>
                <div class="relative form-field">
                    <span>Curso 1: {{$aluno->curso->nome}}</span>
                </div>
                <div class="relative form-field">
                    <span>Curso 2: {{$aluno->cursob->nome ?? ''}}</span>
                </div>
                <div class="relative form-field">
                    <small>As informações para acesso ao seu curso como login e a senha serão enviados no whatsapp
                        {{$aluno->telefone}} por nossa equipe de suporte em até 02 dias úteis</small>
                </div>
            </div>
        </div>
    </section>
    @include('sweetalert::alert')
</body>

</html>
