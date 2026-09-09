@extends('layouts.mainApp')

@section('main_content')

<div class="ai-container">

    {{-- =====================================================
         HEADER
    ====================================================== --}}
    <div class="ai-header">

        <h1>🤖 Laravel AI Chat</h1>

        <p>
            Ask your question and get an AI answer.
        </p>

    </div>


    {{-- =====================================================
         CHAT AREA
         ONLY THIS AREA WILL SCROLL
    ====================================================== --}}
    <div class="chat-box">

        {{-- ERROR --}}
        @if(session('error'))

            <div class="error-message">
                {{ session('error') }}
            </div>

        @endif


        {{-- VALIDATION ERRORS --}}
        @if($errors->any())

            <div class="validation-errors">

                @foreach($errors->all() as $error)

                    <div>
                        {{ $error }}
                    </div>

                @endforeach

            </div>

        @endif


        {{-- =================================================
             USER QUESTION
        ================================================== --}}
        @isset($question)

            <div class="message user-message">

                <div class="message-icon">
                    👤
                </div>

                <div class="message-content">

                    <div class="message-name">
                        You
                    </div>

                    <div class="message-text">
                        {{ $question }}
                    </div>

                </div>

            </div>

        @endisset


        {{-- =================================================
             AI ANSWER
        ================================================== --}}
        @isset($answer)

            <div class="message ai-message">

                <div class="message-icon">
                    🤖
                </div>

                <div class="message-content">

                    <div class="message-name">
                        AI
                    </div>

                    <div class="message-text">
                        {!! nl2br(e($answer)) !!}
                    </div>

                </div>

            </div>

        @endisset


        {{-- =================================================
             WELCOME MESSAGE
        ================================================== --}}
        @empty($question)

            @empty($answer)

                <div class="welcome-message">

                    <div class="welcome-icon">
                        🤖
                    </div>

                    <h2>Hello! 👋</h2>

                    <p>
                        Ask me anything about Laravel, PHP,
                        programming, or any other topic.
                    </p>

                </div>

            @endempty

        @endempty

    </div>


    {{-- =====================================================
         INPUT AREA
         THIS WILL NOT SCROLL
    ====================================================== --}}
    <form
        action="{{ route('ai.ask') }}"
        method="POST"
        class="chat-form"
    >

        @csrf

        <div class="input-container">

            <textarea
                name="question"
                class="question-input"
                placeholder="Ask something to AI..."
                required
            >{{ old('question') }}</textarea>

            <button
                type="submit"
                class="send-button"
            >
                Send 🚀
            </button>

        </div>

    </form>

</div>

@endsection