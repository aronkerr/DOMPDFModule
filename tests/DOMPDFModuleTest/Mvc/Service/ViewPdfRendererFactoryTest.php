<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @author Raymond J. Kolbe <rkolbe@gmail.com>
 * @copyright Copyright (c) 2012 University of Maine, 2016 Raymond J. Kolbe
 * @license	http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace DOMPDFModuleTest\Mvc\Service;

use DOMPDFModule\Mvc\Service\ViewPdfRendererFactory;
use DOMPDFModule\View\Renderer\PdfRenderer;
use DOMPDFModuleTest\Framework\TestCase;

class ViewPdfRendererFactoryTest extends TestCase
{
    public function testCreatesService()
    {
        $factory = new ViewPdfRendererFactory();

        /* @var $instance \DOMPDFModule\View\Renderer\PdfRenderer */
        $instance = $factory($this->getServiceManager(), 'ViewPdfStrategy');

        $this->assertInstanceOf(PdfRenderer::class, $instance);
    }
}
