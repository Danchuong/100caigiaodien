# Gt-america — Refero Style

- Refero URL: https://styles.refero.design/style/abdac0a6-64f7-46f7-98af-82ce921fe78c
- Site URL: https://www.gt-america.com
- ID: abdac0a6-64f7-46f7-98af-82ce921fe78c
- Theme: light
- Industry: design
- Created: 2026-04-30T03:54:13.930Z
- Ranks: newest: 32, popular: 904, trending: 894

> Vivid Pop-Art Canvas

## Description

The GT America visual system is a stark, high-contrast exploration of primary colors, mimicking vintage packaging and pop-art aesthetics. It deploys a limited palette of white, vibrant blue, and punchy orange against a dominant white canvas. Type is paramount, often oversized and serving as graphic elements, with borders and outlines heavily used to delineate content rather than subtle shadows. The aesthetic is bold, playful, and intentionally draws attention through its raw, unfiltered color usage and maximalist typographic approach.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, prominent card surfaces, primary text on dark backgrounds, internal borders and box shadows creating an almost tactile, cut-out effect |
| Electric Blue | #0000ff | brand | Primary UI accents, navigation text, interactive states, borders for text inputs, decorative elements, and as an active state for button outlines and ghost buttons |
| Orange Punch | #ff3500 | brand | Primary action backgrounds, key informational accents, specific button outlines (when not filled), and prominent graphic elements within the overall design |
| Ink Black | #000000 | neutral | General text, secondary navigation items, and small icons, used sparingly for strong contrast against white or orange backgrounds |
| Vivid Indigo | #0028ff | accent | Violet decorative accent for icons, marks, and small graphic details. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GT America Intl | system-ui, sans-serif | 400 | 12px, 14px, 16px, 18px, 21px, 22px, 24px, 32px, 36px, 39px, 54px, 58px, 60px, 65px, 79px, 88px, 101px, 108px, 115px, 130px, 135px, 144px, 158px, 171px, 230px, 287px, 338px, 346px, 900px | 0.74, 0.80, 0.95, 1.00, 1.11, 1.12, 1.14, 1.15, 1.17, 1.20, 1.22, 1.23, 1.30, 1.35, 1.45, 1.50, 1.60 | The primary typeface for all textual content, including headings, body text, and interactive elements. Its wide range of sizes and feature settings allows it to function as both functional text and bold graphic elements. |
| GT America Intl Mono | monospace | 400 | 12px, 18px, 60px, 65px, 101px, 255px, 338px, 346px | 0.95, 1.00, 1.12, 1.15, 1.17, 1.22, 1.35 | Used for specific tabular data, code samples, or stylistic emphasis where a monospaced and slightly tracked look is desired, especially at larger sizes for graphic impact. |
| GT America Japanese |  | 400 | 16px, 32px, 65px, 108px, 130px, 900px | 0.8, 1.11, 1.22, 1.5 | GT America Japanese — detected in extracted data but not described by AI |
| GT America Thai Looped |  | 400 | 18px, 36px, 101px, 108px, 115px, 346px | 0.8, 1, 1.11, 1.2, 1.45 | GT America Thai Looped — detected in extracted data but not described by AI |
| GT America Thai Loopless |  | 400 | 16px, 108px, 121px, 346px | 0.8, 1.1, 1.2 | GT America Thai Loopless — detected in extracted data but not described by AI |
| GT America Contrast |  | 400 | 16px, 195px | 1 | GT America Contrast — detected in extracted data but not described by AI |
| GT America TradChinese |  | 400 | 32px, 108px, 130px | 0.8, 1.11, 1.22 | GT America TradChinese — detected in extracted data but not described by AI |
| GT America Intl Italic |  | 400 | 32px, 86px | 1 | GT America Intl Italic — detected in extracted data but not described by AI |
| GT America SimpChinese |  | 400 | 65px, 108px | 0.8, 1.11 | GT America SimpChinese — detected in extracted data but not described by AI |
| GT America Intl Latin Subset |  | 400 | 12px | 1.17 | GT America Intl Latin Subset — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.17 | 0.36 |
| body-sm | 14 | 1.23 |  |
| body | 16 | 1.22 |  |
| subheading | 24 | 1.2 |  |
| heading-sm | 32 | 1.15 |  |
| heading | 60 | 1.12 |  |
| heading-lg | 108 | 1.11 | -2.7 |
| display | 900 | 0.74 | -36 |

## Spacing & Shape

```json
{
  "radius": {
    "input": "9999px",
    "buttons": "9999px"
  },
  "elementGap": "12px",
  "sectionGap": "96px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button - Blue Type

**Role:** Interactive controls with minimal visual footprint, often in navigation or secondary actions, emphasized by type color and a hairline border.

Background transparent, text color Electric Blue (#0000ff), border color Electric Blue (#0000ff). No border-radius. Padding is 0px.

### Ghost Button - Orange Type

**Role:** Interactive controls for less critical actions, using the secondary brand color for text and border, maintaining a minimalist appearance.

Background transparent, text color Orange Punch (#ff3500), border color Orange Punch (#ff3500). No border-radius. Padding is 3px top, 0px right, 0px bottom, 0px left.

### Pill Button - Orange Filled

**Role:** Primary call-to-action buttons, highly prominent with a filled brand color and large, playful padding, suggesting interactive delight.

Background Orange Punch (#ff3500), text color Canvas White (#ffffff), border color Canvas White (#ffffff). Border-radius 9999px. Padding 60px all sides.

### Ghost Button - White BG Blue Type

**Role:** A subtle interactive control primarily for navigation or utility, used when the background demands a distinct white container.

Background Canvas White (#ffffff), text color Electric Blue (#0000ff), border color Electric Blue (#0000ff). No border-radius. Padding 0px all sides.

### Text Input - White BG Blue Border

**Role:** Standard text input field on a light background, outlined with the primary brand blue to maintain visual consistency.

Background Canvas White (#ffffff), text color Electric Blue (#0000ff), border color Electric Blue (#0000ff). No border-radius. Left padding 12px.

### Text Input - Solid Blue

**Role:** Monochromatic text input designed to integrate with backgrounds, where the input field is the primary Electric Blue.

Background Electric Blue (#0000ff), text color Electric Blue (#0000ff), border color Electric Blue (#0000ff). No border-radius. Padding 0px all sides.

### Pill Input - Solid Blue

**Role:** A decorative or interactive input field that adopts a pill shape and solid blue background for visual distinctiveness.

Background Electric Blue (#0000ff), text color Electric Blue (#0000ff), border color Electric Blue (#0000ff). Border-radius 9999px. Padding 0px all sides.

### Pill Input - Ghost Blue

**Role:** An outlined, pill-shaped input, serving as a filter or search bar, maintaining the brand's graphic, outlined aesthetic.

Background transparent, text color Electric Blue (#0000ff), border color Electric Blue (#0000ff). Border-radius 9999px. Padding 0px all sides.

## Do's

- Prioritize GT America Intl typeface for all textual content, leveraging its diverse sizes and stylistic alternates for both readability and graphic impact.
- Use Electric Blue (#0000ff) as the primary accent for interactive elements, links, and borders to create a cohesive interactive language.
- Implement Orange Punch (#ff3500) exclusively for primary call-to-action buttons and critical information to ensure high visual urgency.
- Employ Canvas White (#ffffff) as the default background for most page sections and as the primary text color on dark backgrounds.
- Apply 9999px border-radius to all buttons and input fields that require a 'pill' shape, creating a consistent playful edge.
- Utilize 12px as the standard element gap to create comfortable breathing room between components on the page.
- Emphasize content through strong outlines and borders using brand colors, rather than relying on subtle shadows or gradients for separation.

## Don'ts

- Avoid using standard drop shadows for UI elements; instead, use white 1px borders and inner box shadows if elevation is necessary to maintain the graphic, outlined aesthetic.
- Do not introduce additional chromatic colors; the palette is explicitly limited to Electric Blue and Orange Punch as accents.
- Refrain from using gradients for backgrounds or components, as the design system relies on flat, high-contrast color blocks.
- Do not deviate from the specified GT America font families or their provided feature settings; these are critical to the brand identity.
- Avoid subtle, low-contrast text for body copy; ensure sufficient contrast with Ink Black (#000000) or Electric Blue (#0000ff) on Canvas White (#ffffff).
- Do not use generic padding or spacing values; adhere strictly to the `spacing` tokens to maintain the established rhythm and density.
- Do not add decorative flourishes or complex imagery that breaks from the strict two-tone primary color scheme and graphic, type-driven approach.

## Layout

The page primarily uses a full-bleed layout, particularly for large typographical hero sections and the overall wrapper. Content within these sections tends to be loosely centered or arranged in a dynamic, overlapping collage style, especially with the 'packaging' elements. There isn't a strict grid for content arrangement, rather a dynamic, somewhat chaotic, yet visually unified composition, as seen in the overlapping product boxes. Vertical rhythm is established through consistent section gaps, but individual elements within sections may have varied spacing for graphic effect. Navigation is minimal, likely a fixed top bar or subtle overlay. The page avoids conventional card grids or complex structural elements in favor of a simpler, more expressive arrangement.

## Imagery

Imagery is almost entirely absent, replaced instead by typography as the dominant visual element. When graphics are present, they are either simple, high-contrast line art or solid color shapes, often abstract or iconic, using the brand's Electric Blue and Orange Punch. Illustrations are flat, outlined, and minimal, serving decorative and atmospheric roles rather than explanatory content. Icons, if visible, maintain a bold, filled style consistent with the graphic typography. The density is very text-dominant, with oversized type acting as large-scale visual elements or even full-bleed backgrounds.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA Eye on Design | Shares a vibrant, graphic-forward aesthetic with bold typography and a limited, high-contrast color palette. |
| Grilli Type | As the parent type foundry, it naturally shares the same typographic emphasis, experimental layout, and graphic quality. |
| Monotype Imaging | Similar focus on presenting high-quality typefaces with strong visual design that often pushes typographic boundaries. |
| Swiss Typefaces | Employs bold, often experimental type design with strong, clean graphic elements and limited, punchy color palettes. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
text: #000000
background: #ffffff
border: #0000ff
accent: #0000ff
primary action: #ff3500 (filled action)

### 3-5 Example Component Prompts
1. Create a page header: 'GT America Intl' headline (GT America Intl, 108px, #0000ff, letter-spacing -2.7px, line-height 1.11). Below it on the right side, a ghost button with 'Type Tester' text (GT America Intl, 12px, #0000ff, transparent background, #0000ff border).
2. Create a primary call-to-action section: A large 'Download' button (Pill Button - Orange Filled, GT America Intl, 60px padding, #ff3500 background, #ffffff text, 9999px border-radius). Below it, a subtle text link to 'Learn More' (GT America Intl, 16px, #0000ff).
3. Create an interactive input field: A text input (Text Input - White BG Blue Border, GT America Intl, 16px, #0000ff text, #ffffff background, #0000ff border, 12px left padding). Next to it, a small search icon (Electric Blue, filled, 20px size).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521214404-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521214404-thumb.jpg |
