@extends("layout")

@section("styles")
    <link rel="stylesheet" href="/styles/register.css">
@section("title" ,"register")

@section("content")
    <form>
        <div class="login-root">
            <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="loginbackground box-background--white padding-top--64">
                <div class="loginbackground-gridContainer">
                <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                    <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                    </div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                    <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                    <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                    <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                    <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                    <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                    <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                    <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                    <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
                </div>
                </div>
            </div>
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                <h1><a href="/" rel="dofollow">Pixel Analytica</a></h1>
                </div>
                <div class="formbg-outer">
                <div class="formbg">
                    <div class="formbg-inner padding-horizontal--48">
                    <form id="stripe-login">
                        <div class="field padding-bottom--24">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        </div>
                        <div class="field padding-bottom--24">
                            <div class="grid--50-50">
                                <label for="password">Password</label>
                            </div>
                            <input type="password" name="password">
                        </div>
                        <div class="field padding-bottom--24">
                            <div class="grid--50-50">
                                <label for="password_check">Password Check</label>
                            </div>
                            <input type="password_check" name="password_check">
                        </div>
                        <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                        </div>
                        <div class="field padding-bottom--24">
                        <input type="submit" name="submit" value="Continue">
                        </div>
                        <div class="field">
                            <span>Already have an account? <a href="/auth">Sign In</a></span>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </form>
@endsection