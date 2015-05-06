package webserver;

import org.develnext.jphp.core.compiler.jvm.JvmCompilerCase;
import org.develnext.jphp.ext.webserver.WebServerExtension;
import php.runtime.env.CompileScope;

public class WebServerJvmTestCase extends JvmCompilerCase {

    @Override
    protected CompileScope newScope() {
        CompileScope scope = super.newScope();
        scope.registerExtension(new WebServerExtension());
        return scope;
    }
}
