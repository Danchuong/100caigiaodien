# Hugo & Marie — Refero Style

- Refero URL: https://styles.refero.design/style/58a36cba-3fc4-48fa-a7d9-7f14592b7857
- Site URL: https://www.hugoandmarie.com
- ID: 58a36cba-3fc4-48fa-a7d9-7f14592b7857
- Theme: light
- Industry: agency
- Created: 2026-04-30T02:58:00.853Z
- Ranks: newest: 258, popular: 1218, trending: 1239

> Gallery Grid on Canvas

## Description

Hugo & Marie operates with a refined, understated aesthetic characterized by stark monochrome typography and a deliberately sparse, almost gallery-like layout. Clean, unadorned surfaces provide a neutral canvas for striking visual content, while subtle hints of interactivity appear as ghost buttons and hairline borders. The system prioritizes clarity and a sense of curated space, allowing the visual work to take center stage.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Ink Black | #000000 | neutral | Primary text, headings on light backgrounds, element borders. Background for hero sections and image overlays |
| Graphite | #0a0a0a | neutral | Decorative borders, secondary text where primary text is Ink Black. Used for subtle emphasis without full black contrast |
| Ash Gray | #b3b3b3 | neutral | Muted secondary text, ghost button borders, decorative icon fills. Suggests interaction without high contrast |
| Silver Mist | #cccccc | neutral | Subtle background for badges, text on badges with higher contrast background. Low-prominence UI elements |
| Input Border Gray | #767676 | neutral | Standard input field borders, providing a clear but not dominant delineation |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| soehne | system-ui | 300, 400 | 14px, 16px, 20px, 22px | 1.00, 1.15, 1.20, 1.40, 1.44, 1.64, 1.80 | Primary functional typeface for body text, navigation, links, and buttons. Its versatile weight range supports both compact UI elements and more descriptive content. |
| saol-display | serif | 100 | 100px | 0.95 | Signature display typeface for impactful headlines. Its extremely light weight and generous tracking create a sophisticated, almost ethereal presence, emphasizing elegance over shouting. |
| soehne-mono | monospace | 400 | 13px | 1.31 | Monospaced font used for small, functional elements like badges, providing technical precision where needed without disrupting the overall minimal aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 17 | 0 |
| body | 16 | 23 | 0.128 |
| subheading | 20 | 23 | 0.16 |
| heading | 22 | 22 | 0.44 |
| display | 100 | 95 | -10 |

## Spacing & Shape

```json
{
  "radius": {
    "badges": "9999px"
  },
  "elementGap": "5px",
  "sectionGap": "90px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Text Button

**Role:** Interactive element, navigation

Minimalist button for navigation or secondary actions. Uses `Canvas White` for text and border against dark backgrounds, or `Ink Black` text with subtle border against light backgrounds. No background fill, providing a 'ghost' appearance. No padding.

### Pill Badge - Light Text

**Role:** Categorization, status indicator

Pill-shaped badge with `Silver Mist` background (rgba(0,0,0,0.2) against dark) and `Canvas White` text. Rounded to `9999px` radius, 6px top/8px bottom vertical padding, 24px horizontal padding.

### Pill Badge - Gray Border

**Role:** Categorization, status indicator

Pill-shaped badge with no background and a border color of `Ash Gray` (rgba(0,0,0,0.2) or #cccccc depending on background). Rounded to `9999px` radius, 6px top/8px bottom vertical padding, 24px horizontal padding.

### Text Input - Dark

**Role:** Data entry

Transparent background input field, `Canvas White` text. `Canvas White` border, 0px radius. Minimal 1px vertical, 2px horizontal padding. Hint text might be `Ash Gray`.

### Text Input - Light

**Role:** Data entry

Input field with `Canvas White` background and `Ink Black` text. `Input Border Gray` (or #767676) border, 0px radius. Minimal 1px vertical, 2px horizontal padding.

## Do's

- Use `Canvas White` (#ffffff) for all main page and card backgrounds to maintain a clean, expansive feel.
- Employ `saol-display` weight 100 at 100px with -10px letter-spacing for primary headlines to create a striking, elegant visual statement.
- Structure content with ample white space, using `sectionGap` of 90px between major content blocks.
- Maintain a monochromatic palette with only `Ink Black`, `Graphite`, `Ash Gray`, `Silver Mist`, and `Input Border Gray` for UI elements.
- Apply `9999px` border-radius to all badges for a consistent pill shape.
- Prioritize text-based interactions; button backgrounds are typically transparent, with text and borders defining interactivity.
- Ensure input fields use explicit borders like `Input Border Gray` and `Canvas White` to define their boundaries distinctly from the minimalistic buttons.

## Don'ts

- Avoid using bright or saturated colors for backgrounds, primary text, or interactive elements; reserve accent for content visuals.
- Do not introduce heavy shadows or gradients on UI components, favoring flat surfaces and subtle borders.
- Refrain from using bold or heavy weights for `soehne` when styling headings; its primary use should be for body and navigation.
- Do not add additional padding to ghost buttons; they should remain as minimalist text links with an implied interactive zone.
- Avoid decorative iconography that is colorful or heavily outlined; icons should be monochromatic, using `Ink Black` or `Ash Gray`.
- Do not deviate from the defined `9999px` radius for badges; all interactive tags or status indicators should adopt this pill shape.

## Layout

The page exhibits a max-width contained model post-hero, with content sections having consistent vertical spacing. The hero features a full-bleed background image with a centered, large `saol-display` headline in `Canvas White` text. Subsequent sections primarily utilize a two-column layout, often with text on one side and an image or content block on the other, or a centered stacked arrangement. A consistent grid of four columns is used for displaying image thumbnails. The density is spacious, with significant padding and margin creating ample breathing room around elements. Navigation is a simple top bar, typically fixed or ghosted over the hero, with minimalist text links.

## Imagery

This site predominantly features striking, high-fidelity photography of human subjects or abstract, art-focused compositions. Imagery is often full-bleed or large-scale, acting as a dramatic backdrop or hero element. When not full-bleed, images are typically presented in a clean grid layout with sharp, unrounded edges. The treatment emphasizes the visual impact of the content, often using monochrome or desaturated palettes, with occasional vibrant but confined bursts of color (e.g., iridescent skin tones, abstract art pieces). Icons are outlined and monochromatic, acting as minimal UI elements rather than detailed graphics. The overall role of imagery is decorative atmosphere and product showcase, leaning heavily into a gallery-like presentation.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA | Minimalist layout, strong focus on showcase visuals, and subtle-to-no decorative UI elements. |
| Made by Google | Clean white backgrounds with focus on product/visuals and understated typography. |
| Chermayeff & Geismar & Haviv | Architectural use of space, emphasis on stark monochrome with content driving visual interest. |
| Squarespace | Often uses a hero image/video with minimal text overlay, followed by clean sections featuring photography and elegant typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #000000
- background: #ffffff
- border: #0a0a0a
- accent: none observed
- primary action: no distinct CTA color

Example Component Prompts:
- Create a hero section: full-bleed image background. Centered headline 'WELCOMING JOHANNA JASKOWSKA' using `saol-display` weight 100, size 100px, #ffffff, letter-spacing -10px. Ghost navigation links on top bar using `soehne` weight 400, size 16px, #ffffff.
- Create a feature section: `Canvas White` background, 90px section gap. Two-column layout: left column contains subheading 'Creative Agency' using `soehne` weight 400, size 22px, #000000; body text 'Our Creative Agency helps bring brands to life...' using `soehne` weight 400, size 16px, #000000. Right column contains an image of an artwork.
- Create a functional badge: fill background with `Silver Mist` (#cccccc), text 'Latest' using `soehne-mono` weight 400, size 13px, #000000. Apply `9999px` border-radius and 6px top, 8px bottom, 24px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517859874-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517859874-thumb.jpg |
