package Foswiki::Plugins::BeautifierPlugin::HFile::HFile_scheme;

###############################
#
# Beautifier Perl HFile
# Language: scheme
#
###############################

use Foswiki::Plugins::BeautifierPlugin::HFile;
@ISA = qw(HFile);

sub new {
    my ($class) = @_;
    my $self = {};
    bless $self, $class;

    # Flags:
    $self->{nocase}      = "0";
    $self->{notrim}      = "0";
    $self->{perl}        = "0";
    $self->{indent}      = ["("];
    $self->{unindent}    = [")"];
    $self->{stringchars} = ["\""];
    $self->{delimiters}  = [
        "~",  "@",  "%", "^", "&", "*", "(", ")", "+", "=",
        "|",  "\\", "/", "{", "}", "[", "]", ":", ";", "\"",
        "\'", "<",  " ", ",", "	", "."
    ];
    $self->{escchar}         = "\\";
    $self->{linecommenton}   = [";"];
    $self->{blockcommenton}  = [""];
    $self->{blockcommentoff} = [""];
    $self->{keywords}        = {
        "accumulate"        => "1",
        "aling"             => "1",
        "appearances"       => "1",
        "append"            => "1",
        "apply"             => "1",
        "assoc"             => "1",
        "before?"           => "1",
        "begin"             => "1",
        "bf"                => "1",
        "bl"                => "1",
        "butfirst"          => "1",
        "butlast"           => "1",
        "caaar"             => "1",
        "caadr"             => "1",
        "caar"              => "1",
        "cadar"             => "1",
        "caddr"             => "1",
        "cadr"              => "1",
        "car"               => "1",
        "cdaar"             => "1",
        "cdadr"             => "1",
        "cdar"              => "1",
        "cddar"             => "1",
        "cdddr"             => "1",
        "cddr"              => "1",
        "cdr"               => "1",
        "children"          => "1",
        "close-all-ports"   => "1",
        "close-input-port"  => "1",
        "close-output-port" => "1",
        "cons"              => "1",
        "count"             => "1",
        "datum"             => "1",
        "define"            => "1",
        "display"           => "1",
        "empty?"            => "1",
        "eof-object?"       => "1",
        "error"             => "1",
        "every"             => "1",
        "filter"            => "1",
        "first"             => "1",
        "for-each"          => "1",
        "item"              => "1",
        "keep"              => "1",
        "lambda"            => "1",
        "last"              => "1",
        "length"            => "1",
        "let"               => "1",
        "list"              => "1",
        "list->vector"      => "1",
        "list-ref"          => "1",
        "list?"             => "1",
        "load"              => "1",
        "make-node"         => "1",
        "make-vector"       => "1",
        "map"               => "1",
        "member"            => "1",
        "member?"           => "1",
        "newline"           => "1",
        "null?"             => "1",
        "open-input-file"   => "1",
        "open-output-file"  => "1",
        "procedure?"        => "1",
        "quote"             => "1",
        "read"              => "1",
        "read-line"         => "1",
        "read-string"       => "1",
        "reduce"            => "1",
        "repeated"          => "1",
        "se"                => "1",
        "sentence"          => "1",
        "sentence?"         => "1",
        "show"              => "1",
        "show-line"         => "1",
        "trace"             => "1",
        "untrace"           => "1",
        "vector"            => "1",
        "vector->length"    => "1",
        "vector->list"      => "1",
        "vector-ref"        => "1",
        "vector-set!"       => "1",
        "vector?"           => "1",
        "word"              => "1",
        "word?"             => "1",
        "write"             => "1",
        "abs"               => "2",
        "ceiling"           => "2",
        "cos"               => "2",
        "even?"             => "2",
        "expt"              => "2",
        "floor"             => "2",
        "integer?"          => "2",
        "log"               => "2",
        "max"               => "2",
        "min"               => "2",
        "number?"           => "2",
        "odd?"              => "2",
        "quotient"          => "2",
        "random"            => "2",
        "remainder"         => "2",
        "round"             => "2",
        "sin"               => "2",
        "sqrt"              => "2",
        "and"               => "3",
        "boolean?"          => "3",
        "cond"              => "3",
        "if"                => "3",
        "not"               => "3",
        "or"                => "3",
        "#f"                => "5",
        "#t"                => "5",
        "\\\'()"            => "5"
    };

# Each category can specify a Perl function that takes in the function name, and returns a string
# to put in its place. This can be used to generate links, images, etc.

    $self->{linkscripts} = {
        "1" => "donothing",
        "2" => "donothing",
        "3" => "donothing",
        "5" => "donothing"
    };

    return $self;
}

# DoNothing link function

sub donothing {
    my ($self) = @_;
    return;
}
1;
