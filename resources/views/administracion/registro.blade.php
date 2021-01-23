@extends('adminlte::page')

@section('title', 'administracion')


@section('content_header')
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="60" height="60" x="0" y="0" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
    <path xmlns="http://www.w3.org/2000/svg" style="" d="M21.197,33.14c-1.159,5.395-0.719,11.389-0.993,16.887c-0.757,15.19-2.131,30.373-2.426,45.588  c-0.543,28.034,1.553,56.007,2.728,83.985c1.675,39.874-2.058,79.943-2.699,119.78c-0.157,9.725-2.044,20.979-0.281,30.561  c1.528,8.307,3.241,13.732,2.61,22.67c-0.857,12.14-1.24,24.32-1.748,36.469c-0.717,17.154-1.146,34.209-1.146,51.396  c0,11.351-0.462,22.82,0.001,34.165c0.234,5.728-0.14,11.968,3.927,16.228c5.871,6.148,16.907,8.19,24.731,9.604  c22.69,4.1,47.491-1.249,70.769,0.44c19.302,1.4,38.41,3.81,57.751,4.546c17.967,0.684,35.955,0.132,53.958,1.053  c15.256,0.781,30.667,2.785,45.94,1.163c13.522-1.436,27.21-1.816,40.762-2.97c10.434-0.889,20.089-4.399,29.262-9.438  c8.494-4.666,14.294-12.579,19.887-20.241c5.163-7.073,10.32-10.884,17.234-15.865c15.14-10.906,15.44-30.498,13.998-47.322  c-2.73-31.861-3.626-63.1-3.666-95.049c-0.016-12.935,0.668-26.077,0.029-38.995c-0.278-5.621,0.09-14.057-2.278-19.03  c-6.545,6.359-11.314,14.565-18.152,20.966c-7.401,6.928-13.455,14.547-20.046,22.043c-12.218,13.895-33.354,27.33-51.23,31.492  c-2.958,0.689-7.206,2.826-9.814,0.413c-3.71-3.434,0.318-20.907,0.808-25.01c1.931-16.18,6.069-33.549,14.402-47.768  c19.217-32.79,46.492-60.708,66.746-92.951c12.188-19.403,11.398-42.782,8.801-64.853c-1.605-13.642-5.358-27.847-2.412-41.336  c2.87-13.14,3.406-29.486-0.383-42.505c-3.97-13.639-22.776-12.679-33.854-12.667c-16.563,0.018-33.074,0.575-49.656,0.565  c-33.895-0.021-68.06,1.934-101.885,3.827c-18.665,1.045-37.441-0.441-56.104,0.693c-20.144,1.224-40.684,1.153-60.846,1.13  C61.947,12.786,18.311,7.712,21.197,33.14z" fill="#28d965" data-original="#f4f4f4" class=""/>
    <g xmlns="http://www.w3.org/2000/svg">
        <path style="" d="M54.529,98.108c-2.642,11.471-0.029,24.893-0.578,36.607c-0.23,4.917-1.171,15.776,2.95,19.195   c4.021,3.336,15.564,2.044,20.056,1.793c6.044-0.337,11.806-0.55,17.693-1.681c5.458-1.049,9.165-0.607,11.713-6.283   c3.295-7.341,2.063-17.136,0.86-24.789c-1.419-9.019,1.77-33.063-8.053-36.126C88.441,83.479,53.704,86.64,54.529,98.108z" fill="#ff3535" data-original="#ff3535" class=""/>
        <path style="" d="M54.529,191.324c-2.642,11.471-0.029,24.893-0.578,36.607c-0.23,4.917-1.171,15.776,2.95,19.195   c4.021,3.336,15.564,2.043,20.056,1.793c6.044-0.337,11.806-0.55,17.693-1.681c5.458-1.049,9.165-0.607,11.713-6.283   c3.295-7.341,2.063-17.136,0.86-24.789c-1.419-9.019,1.77-33.063-8.053-36.126C88.441,176.695,53.704,179.855,54.529,191.324z" fill="#ff3535" data-original="#ff3535" class=""/>
        <path style="" d="M53.964,285.104c-2.642,11.471-0.029,24.893-0.578,36.607c-0.23,4.917-1.171,15.776,2.95,19.195   c4.021,3.336,15.564,2.043,20.056,1.793c6.043-0.337,11.806-0.55,17.693-1.681c5.458-1.049,9.165-0.607,11.713-6.283   c3.295-7.341,2.063-17.136,0.86-24.789c-1.419-9.019,1.77-33.063-8.053-36.126C87.876,270.475,53.139,273.635,53.964,285.104z" fill="#ff3535" data-original="#ff3535" class=""/>
        <path style="" d="M54.529,378.884c-2.642,11.471-0.029,24.893-0.578,36.606c-0.23,4.917-1.171,15.776,2.95,19.195   c4.021,3.336,15.564,2.043,20.056,1.793c6.044-0.337,11.806-0.55,17.693-1.681c5.458-1.049,9.165-0.607,11.713-6.283   c3.295-7.341,2.063-17.136,0.86-24.789c-1.419-9.019,1.77-33.063-8.053-36.126C88.441,364.255,53.704,367.415,54.529,378.884z" fill="#ff3535" data-original="#ff3535" class=""/>
    </g>
    <path xmlns="http://www.w3.org/2000/svg" style="" d="M415.502,104.856c-1.318,1.051-2.486,2.477-3.461,4.34c-5.429,10.362-11.877,20.328-18.477,30.169  c-14.153,21.105-29.067,41.686-43.928,62.295c-9.707,13.461-18.615,27.429-27.621,41.37c-3.12,4.83-11.98,13.563-11.55,19.544  c3.438,0.921,7.255,0.477,10.416,2.783c4.225,3.08,3.442,7.645,6.039,11.338c2.436,3.464,0.258,1.901,4.817,2.35  c4.832,0.475,8.305-2.023,12.641,2.021c3.59,3.347,5.486,15.345,10.784,13.646c3.722-1.193,9.937-12.872,12.501-16.079  c7.43-9.292,13.644-19.476,20.256-29.337c10.83-16.152,20.435-32.956,31.252-49.092c10.58-15.783,24.546-29.025,34.959-44.852  c2.947-4.479,13.178-16.481,12.238-22.219c-0.724-4.42-8.933-9.814-12.426-13.321C446.207,112.045,426.057,96.432,415.502,104.856z" fill="#f76b25" data-original="#f76b25" class=""/>
    <path xmlns="http://www.w3.org/2000/svg" style="" d="M433.039,70.426c0.617-13.297,27.24-22.376,37.864-24.149c9.124-1.522,19.112,2.34,23.719,10.824  c4.722,8.697,0.139,20.053-3.394,28.467c-3.77,8.98-9.478,21.296-16.834,27.735c-0.613-8.573-12.231-16.606-18.164-21.82  c-4.502-3.956-9.363-7.731-14.024-11.48c-3.446-2.771-9.186-4.462-11.38-7.927C431.898,71.656,433.57,70.62,433.039,70.426z" fill="#ff7c88" data-original="#ff7c88" class=""/>
    <path xmlns="http://www.w3.org/2000/svg" style="" d="M469.195,135.96c5.311-13.813,2.046-23.499-5.932-34.744c-4.506-6.351-26.227-29.092-34.771-23.004  c-2.154,1.535-4.329,8.139-5.651,10.718c-1.964,3.83-3.935,8.025-5.564,11.891c11.229,1.946,20.254,8.995,29.597,15.154  c4.849,3.196,10.103,6.362,14.551,10.225C464.518,128.887,466.293,134.759,469.195,135.96z" fill="#ffdc0f" data-original="#ffdc0f"/>
    <path xmlns="http://www.w3.org/2000/svg" style="" d="M304.797,270.98c-1.063,13.009-6.886,25.302-6.116,38.342c7.331-2.877,10.75-0.816,15.873,4.596  c3.115,3.291,2.073,4.051,7.731,1.995c6.308-2.292,13.291-5.186,18.716-8.991c5.708-4.003,8.254-5.303,8.429-11.637  c0.144-5.207-0.367-8.938-4.521-12.455c-3.451-2.921-6.442-3.059-10.703-3.406c-6.395-0.52-3.977,0.256-6.806-5.407  C321.644,262.496,305.312,256.302,304.797,270.98z" fill="#fccca9" data-original="#fccca9"/>
    <path xmlns="http://www.w3.org/2000/svg" style="" d="M295.193,337.078c6.973-1.248,16.543-7.362,21.878-11.974c4.718-4.08,3.413-6.636-0.396-11.202  c-3.011-3.61-6.133-5.383-10.748-6.482c-6.693-1.594-9.688-1.68-11.01,5.526c-0.751,4.098-1.925,9.74-1.417,13.865  c0.44,3.573,2.655,4.939,3.388,8.008" fill="#4c4b46" data-original="#4c4b46"/>
    <path xmlns="http://www.w3.org/2000/svg" d="M495.076,48.009c-21.191-19.598-50.271-2.634-64.452,16.191c-1.782,2.365-3.524,4.76-5.266,7.155  c-4.985,6.852-8.915,13.154-12.508,20.842c-2.055,4.397-4.584,8.913-7.09,13.533c-3.674,5.549-7.236,11.19-10.739,16.899  c-2.764,4.504-5.715,8.875-8.72,13.209c-0.073-3.599-0.419-7.245-0.633-10.648c0.755-7.573,1.588-15.11,1.505-22.937  c-0.157-14.74-3.125-29.041-3.347-43.825c-0.176-11.717,0.52-23.176,0.961-34.908c0.28-7.46,0.639-16.009-6.715-20.093  c-8.549-4.747-21.956-2.724-31.245-3.137c-15.062-0.671-30.27,0.037-45.348-0.005c-29.091-0.08-58.676-0.067-87.709,1.971  c-28.489,2-57.837,4.483-86.369,4.078c-12.523-0.179-24.896,0.795-37.404,0.765C75.435,7.064,60.346,5.951,45.84,7.214  c-8.949,0.78-22.545,1.417-29.561,7.421c-7.255,6.208-5.409,17.08-5.407,25.564c0.008,29.266,0.075,58.5,0.042,87.783  c-0.068,61.274-0.939,122.507-0.971,183.757c-0.007,13.489,0.209,26.877,0.91,40.344c0.779,14.956-0.482,29.616-0.272,44.58  c0.197,14.066,0.142,28.132,0.133,42.201c-0.005,7.669,0.06,15.337,0.069,23.006c0.008,7.335-1.581,14.65-0.992,21.932  c1.78,22.035,25.297,20.499,42.536,20.956c26.591,0.705,53.054,1.748,79.719,1.761c26.146,0.013,51.891,3.183,77.953,4.284  c12.882,0.544,26.076,1.568,38.904,1.06c14.921-0.592,29.906-1.735,44.807-2.019c12.927-0.247,25.789-0.756,38.604-0.799  c11.378-0.038,16.479-2.661,23.731-11.15c9.312-10.9,18.64-22.628,28.604-32.902c8.574-8.841,14.147-11.15,15.005-23.979  c1.826-27.303,0.428-55.498-1.02-82.826c-0.977-18.446-0.037-36.912,0.379-55.359c0.357-15.801-0.307-31.164-1.582-46.909  c-0.133-1.642-0.265-3.303-0.006-4.93c1.04-6.519,7.814-13.959,11.577-19.316c31.423-44.736,67.045-89.006,86.966-140.785  C501.087,77.583,507.705,59.689,495.076,48.009z M397.858,137.514c7.455-11.091,14.834-22.237,21.705-33.737  c2.917,1.113,7.753,4.054,8.795,4.569c3.969,1.961,7.544,4.527,11.227,6.954c-7.385,9.831-12.572,21.407-20.419,30.887  c-11.274,13.621-21.622,27.352-32.073,41.659c-19.387,26.54-36.146,54.417-53.75,81.985c-0.666-3.737-2.262-7.097-6.472-9.755  c-2.684-1.695-5.329-2.303-8.475-2.13c7.055-10.982,13.471-22.479,20.792-33.265c10.948-16.131,22.698-31.511,32.967-48.101  C380.366,163.314,389.163,150.451,397.858,137.514z M312.194,305.547c-2.041-1.385-4.484-2.284-6.855-2.921  c-0.917-0.246-1.883-0.465-2.849-0.581c0.291-1.802,0.579-3.603,0.88-5.404c1.215-7.279,1.028-16.456,5.395-22.895  c1.819-2.682,5.646-5.988,9.244-4.628c4.678,1.769,4.463,9.161,4.918,13.109c0.465,4.03,3.48,5.945,7.289,5.375  c1.872-0.28,2.15-1.952,4.454-1.601c2.545,0.394,11.657,9.611,8.539,12.282c-6.681,5.724-15.326,11.598-22.312,16.403  C318.982,311.113,315.383,307.712,312.194,305.547z M315.012,318.699c-2.497,1.687-5.005,3.361-7.51,4.977  c-1.705,1.1-5.567,2.479-6.951,3.921c-0.888,0.926-1.478,1.149-1.817,1.227c-0.289-4.395,1.653-12.063,2.055-15.256  c0.203-1.608,0.452-3.208,0.684-4.812c1.145,0.213,2.292,0.465,3.409,0.931c2.898,1.209,4.637,2.908,6.846,5.093  C312.826,315.867,313.866,317.465,315.012,318.699z M386.74,437.959c-0.947,6.592-1.633,9.424-6.58,13.719  c-4.804,4.171-8.622,8.952-12.729,13.788c-7.375,8.687-14.422,17.82-22.484,25.875c-6.405,6.399-14.08,3.731-22.475,4.094  c-22.973,0.992-45.858,2.613-68.857,3.374c-24.784,0.82-49.29-2.596-74.052-3.45c-45.769-1.578-91.745-0.914-137.486-3.258  c-5.005-0.257-15.004-0.337-18.715-4.76c-2.717-3.238-0.309-12.128-0.004-16.522c0.894-12.854-0.048-26.094-0.056-38.982  c-0.016-25.756,1.617-51.965,0.12-77.584c-3.082-52.744-0.235-105.798-0.269-158.599c-0.034-53.377,0.01-106.742,0.055-160.087  c0.007-8.756,2.105-12.408,10.926-14.024c5.824-1.067,11.553-2.086,17.485-2.155c13.574-0.158,27.19,0.079,40.768,0.136  c23.718,0.1,47.37-1.79,71.044-2.563c58.167-1.899,116.162-4.012,174.403-4.258c6.826-0.029,13.535,0.561,20.338,0.767  c7.726,0.235,13.72-2.158,14.496,6.958c1.058,12.428-1.229,25.487-0.842,38c0.413,13.366,2.8,26.153,3.478,39.423  c0.162,3.176,0.209,6.367,0.21,9.562c-0.75,13.736-1.18,27.408,1.753,41.219c-5.202,7.263-10.376,14.537-15.1,22.111  c-10.32,16.544-22.076,31.947-33.028,48.065c-5.074,7.467-9.688,15.23-14.393,22.931c-4.155,6.802-9.474,13.342-13.183,20.334  c-7.058,13.306-9.177,31.845-11.355,46.583c-1.184,8.01-7.551,28.761,2.775,32.882c8.62,3.441,23.354-10.177,29.63-14.398  c9.466-6.368,18.201-13.865,27.553-20.439c11.874-8.346,19.333-18.242,28.43-29.303c2.802-3.406,5.428-7.002,7.953-10.701  c0.004,0.387,0.005,0.755-0.002,1.097c-0.134,6.51-0.331,12.997,0.405,19.375c-0.673,18.013-1.835,35.978-1.862,54.063  c-0.034,23.053,1.97,46.105,2.512,69.215C387.817,419.632,388.046,428.864,386.74,437.959z M438.336,167.834  c-14.815,23.364-31.291,45.586-46.444,68.74c-7.412,11.325-14.429,24.029-23.02,34.421c-4.427,5.355-9.445,14.224-15.418,19.754  c-0.654-6.142-1.729-12.187-7.407-15.946c-2.268-1.502-4.193-2.062-5.974-2.108c2.307-3.873,4.301-7.965,6.821-11.726  c4.313-6.438,8.787-12.736,13.001-19.238c9.63-14.859,18.691-29.885,29.14-44.24c18.88-25.936,40.189-50.83,54.878-79.371  c6.315,4.236,13.669,10.374,16.455,17.007c0.053,0.126,0.141,0.211,0.203,0.327C453.123,146.191,445.315,156.827,438.336,167.834z   M465.557,127.022c-5.062-7.433-12.375-12.537-20.088-17c-4.595-2.659-14.377-10.233-22.463-12.239  c0.12,0.03,5.236-10.442,6.179-11.419c4.246-4.403,7.449-1.786,12.14,0.371c9.08,4.175,16.421,10.617,23.634,17.34  C473.786,112.302,468.911,117.79,465.557,127.022z M479.843,99.142c-1.12,2.047-2.163,4.164-3.189,6.293  c-1.142-3.099-2.652-6.083-4.521-8.847c-6.404-9.468-21.451-21.661-33.572-25.206c2.297-3.2,4.503-6.315,6.813-8.541  c9.95-9.59,27.93-16.686,40.258-7.095C497.634,65.083,485.479,88.846,479.843,99.142z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M49.672,143.406c0.327,4.056-0.116,8.644,2.678,12.016c9.043,10.912,36.281,6.051,47.456,1.853  c11.465-4.308,14.002-15.524,13.722-27.721c3.394-3.789,6.609-7.755,9.646-11.271c7.323-8.474,18.518-17.322,21.805-28.18  c0.829-2.74-1.962-5.655-4.748-4.748c-10.459,3.408-17.217,14.544-24.17,22.648c-1.355,1.579-2.731,3.13-4.11,4.678  c-0.646-4.841-1.293-9.391-1.524-13.245c-0.51-8.477-0.212-14.379-9.516-16.156c-10.861-2.074-33.547-1.127-43.329,5.101  c-9.099,5.793-9.089,18.418-8.695,27.979C49.261,125.449,48.939,134.331,49.672,143.406z M66.182,94.713  c9.295-1.975,19.861-2.918,29.385-3.958c4.981,0.312,5.408,1.187,6.758,5.807c2.093,7.161,1.558,16.715,1.422,25.063  c-1.961,2.335-5.063,6.187-7.62,8.212c-6.876-6.317-12.663-14.327-20.704-18.887c0.006,0.045,0.012,0.09,0.017,0.135  c-3.638-1.537-9.935,1.769-5.661,7.179c5.726,7.247,11.338,12.832,17.83,19.329c4.964,4.968,8.592,6.991,14.859,2.413  c0.553-0.405,1.094-0.861,1.64-1.3c-0.108,2.361-0.438,4.516-1.21,5.96c-3.91,7.323-11.779,5.805-18.119,6.183  c-5.132,0.306-23.177,3.835-26.837-1.699c-0.943-1.426-0.51-8.243-0.734-10.695c-0.531-5.814-0.352-11.458-0.392-17.289  C56.745,110.838,53.265,97.458,66.182,94.713z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M148.928,175.541c-14.075,6.284-25.784,20.725-36.734,32.59c-0.719-5.524-1.505-10.744-1.766-15.082  c-0.51-8.477-0.212-14.38-9.516-16.156c-10.861-2.074-33.547-1.128-43.329,5.1c-9.099,5.793-9.089,18.418-8.695,27.979  c0.374,9.088,0.052,17.97,0.785,27.044c0.327,4.056-0.116,8.644,2.678,12.017c9.043,10.912,36.281,6.051,47.456,1.853  c10.873-4.085,13.712-14.384,13.74-25.839c4.953-4.956,9.59-10.566,14.252-15.221c9.006-8.994,20.459-17.934,25.715-29.7  C154.918,176.979,152.08,174.134,148.928,175.541z M102.899,238.277c-3.91,7.323-11.779,5.805-18.119,6.183  c-5.132,0.306-23.177,3.835-26.837-1.699c-0.943-1.426-0.51-8.243-0.734-10.695c-0.531-5.814-0.352-11.458-0.392-17.289  c-0.072-10.329-3.552-23.709,9.366-26.454c9.295-1.975,19.861-2.918,29.385-3.958c4.981,0.312,5.408,1.187,6.758,5.807  c2.271,7.771,1.44,18.382,1.392,27.185c-1.661,1.872-3.455,3.739-4.234,3.894c-3.99,0.79-7.668-4.727-9.664-7.318  c-3.572-4.636-5.373-8.711-11.004-11.239c-4.146-1.861-9.678,3.601-5.366,6.954c8.507,6.614,15.868,31.883,30.608,23.312  C103.921,235.061,103.598,236.968,102.899,238.277z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M100.912,270.504c-10.861-2.074-33.547-1.127-43.329,5.101c-9.099,5.793-9.089,18.418-8.695,27.978  c0.374,9.088,0.052,17.97,0.785,27.044c0.327,4.056-0.116,8.644,2.678,12.017c9.043,10.912,36.281,6.051,47.456,1.853  c21.424-8.049,11.682-40.216,10.622-57.837C109.918,278.184,110.216,272.281,100.912,270.504z M102.899,331.888  c-3.91,7.322-11.779,5.805-18.119,6.183c-5.132,0.306-23.177,3.835-26.837-1.7c-0.943-1.426-0.51-8.243-0.734-10.694  c-0.531-5.814-0.352-11.458-0.392-17.288c-0.072-10.329-3.552-23.71,9.366-26.454c9.295-1.975,19.861-2.918,29.385-3.958  c4.981,0.312,5.408,1.187,6.758,5.807c2.617,8.952,1.113,21.68,1.436,31.062C103.916,319.319,104.935,328.074,102.899,331.888z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M100.912,364.115c-10.861-2.074-33.547-1.127-43.329,5.101c-9.099,5.793-9.089,18.418-8.695,27.979  c0.374,9.088,0.052,17.97,0.785,27.045c0.327,4.056-0.116,8.644,2.678,12.017c9.043,10.912,36.281,6.051,47.456,1.853  c21.424-8.049,11.682-40.216,10.622-57.837C109.918,371.795,110.216,365.892,100.912,364.115z M102.899,425.499  c-3.91,7.322-11.779,5.805-18.119,6.183c-5.132,0.306-23.177,3.835-26.837-1.699c-0.943-1.426-0.51-8.243-0.734-10.695  c-0.531-5.814-0.352-11.458-0.392-17.289c-0.072-10.329-3.552-23.709,9.366-26.454c9.295-1.975,19.861-2.918,29.385-3.958  c4.981,0.312,5.408,1.187,6.758,5.807c2.617,8.952,1.113,21.68,1.436,31.062C103.916,412.93,104.935,421.685,102.899,425.499z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M161.469,99.75c27.45,2.701,56.678,2.839,84.185,1.407c26.334-1.371,55.143,2.554,80.899-3.557c1.419-0.337,1.547-2.757,0-3  c-12.74-2.006-26.553-1.08-39.477-1.326c-13.743-0.261-27.698-0.113-41.422,0.606c-28.013,1.47-56.158-1.634-84.185,1.124  C158.421,95.302,158.415,99.449,161.469,99.75z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M161.469,117.621c27.45,2.701,56.678,2.839,84.185,1.407c26.334-1.371,55.143,2.554,80.899-3.557  c1.419-0.337,1.547-2.757,0-3.001c-12.74-2.006-26.553-1.08-39.477-1.326c-13.743-0.261-27.698-0.113-41.422,0.606  c-28.013,1.469-56.158-1.635-84.185,1.124C158.421,113.174,158.415,117.32,161.469,117.621z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M161.469,135.492c27.45,2.701,56.678,2.839,84.185,1.407c26.334-1.371,55.143,2.554,80.899-3.557  c1.419-0.336,1.547-2.757,0-3c-12.74-2.006-26.553-1.08-39.477-1.326c-13.743-0.261-27.698-0.113-41.422,0.606  c-28.013,1.469-56.158-1.635-84.185,1.123C158.421,131.045,158.415,135.192,161.469,135.492z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M161.318,195.488c25.641,2.701,52.944,2.839,78.639,1.407c24.599-1.371,51.51,2.554,75.569-3.557  c1.325-0.337,1.445-2.757,0-3.001c-11.9-2.006-24.804-1.08-36.876-1.326c-12.838-0.261-25.874-0.113-38.693,0.606  c-26.168,1.469-52.458-1.635-78.639,1.123C158.471,191.041,158.466,195.188,161.318,195.488z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M161.318,213.359c25.641,2.701,52.944,2.839,78.639,1.407c24.599-1.371,51.51,2.554,75.569-3.557  c1.325-0.337,1.445-2.757,0-3c-11.9-2.006-24.804-1.08-36.876-1.326c-12.838-0.261-25.874-0.113-38.693,0.606  c-26.168,1.469-52.458-1.635-78.639,1.123C158.471,208.912,158.466,213.059,161.318,213.359z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M315.526,226.08c-11.9-2.006-24.804-1.08-36.876-1.326c-12.838-0.261-25.874-0.114-38.693,0.606  c-26.168,1.469-52.458-1.635-78.639,1.124c-2.847,0.3-2.853,4.447,0,4.747c25.641,2.701,52.944,2.839,78.639,1.407  c24.599-1.371,51.51,2.554,75.569-3.557C316.851,228.744,316.971,226.324,315.526,226.08z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M267.973,293.735c-8.281-2.006-17.26-1.08-25.66-1.326c-8.933-0.261-18.004-0.114-26.924,0.606  c-18.209,1.469-36.503-1.635-54.72,1.124c-1.981,0.3-1.985,4.447,0,4.747c17.842,2.701,36.841,2.839,54.72,1.407  c17.117-1.371,35.843,2.554,52.584-3.557C268.895,296.399,268.979,293.979,267.973,293.735z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M267.973,311.606c-8.281-2.006-17.26-1.08-25.66-1.326c-8.933-0.261-18.004-0.113-26.924,0.606  c-18.209,1.469-36.503-1.635-54.72,1.124c-1.981,0.3-1.985,4.447,0,4.747c17.842,2.701,36.841,2.839,54.72,1.407  c17.117-1.371,35.843,2.554,52.584-3.557C268.895,314.27,268.979,311.85,267.973,311.606z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M267.973,329.478c-8.281-2.006-17.26-1.08-25.66-1.326c-8.933-0.261-18.004-0.113-26.924,0.606  c-18.209,1.47-36.503-1.635-54.72,1.124c-1.981,0.3-1.985,4.447,0,4.747c17.842,2.701,36.841,2.839,54.72,1.408  c17.117-1.371,35.843,2.554,52.584-3.557C268.895,332.141,268.979,329.721,267.973,329.478z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M267.973,382.453c-8.281-2.006-17.26-1.08-25.66-1.326c-8.933-0.261-18.004-0.113-26.924,0.606  c-18.209,1.469-36.503-1.635-54.72,1.123c-1.981,0.3-1.985,4.447,0,4.747c17.842,2.701,36.841,2.839,54.72,1.407  c17.117-1.371,35.843,2.554,52.584-3.557C268.895,385.117,268.979,382.696,267.973,382.453z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M267.973,400.324c-8.281-2.006-17.26-1.08-25.66-1.326c-8.933-0.261-18.004-0.113-26.924,0.606  c-18.209,1.469-36.503-1.635-54.72,1.124c-1.981,0.3-1.985,4.447,0,4.747c17.842,2.701,36.841,2.839,54.72,1.407  c17.117-1.371,35.843,2.554,52.584-3.557C268.895,402.988,268.979,400.568,267.973,400.324z" fill="#000000" data-original="#000000" style=""/>
    <path xmlns="http://www.w3.org/2000/svg" d="M267.973,418.195c-8.281-2.006-17.26-1.08-25.66-1.326c-8.933-0.261-18.004-0.113-26.924,0.606  c-18.209,1.469-36.503-1.635-54.72,1.124c-1.981,0.3-1.985,4.447,0,4.747c17.842,2.701,36.841,2.839,54.72,1.407  c17.117-1.371,35.843,2.554,52.584-3.557C268.895,420.859,268.979,418.439,267.973,418.195z" fill="#000000" data-original="#000000" style=""/>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    <g xmlns="http://www.w3.org/2000/svg">
    </g>
    </g></svg>
@stop





@section('content')
<div class="container d-flex justify-content-between">
   <a href="{{route('Rpago')}}"> <button class="btn btn-warning mb-4">Registro de Pagos</button></a>
  <a href="{{route('abo')}}"><button class="btn btn-primary btn-lg mb-4">Pagos</button></a>
</div>
<h1 class="text-center text-success font-weight-bold mb-5 display-4 fst-italic" id="titulo">REGISTRO  ADMINISTRACION</h1>


<livewire:scripts>
@livewire('pago-component')







@stop

@section('css')

   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">

   <style>
       h1,body{
        font-family: 'Langar', cursive;
       }
   </style>




@stop

@section('js')

  <script>
      $('#comp').DataTable();
  </script>



@stop
