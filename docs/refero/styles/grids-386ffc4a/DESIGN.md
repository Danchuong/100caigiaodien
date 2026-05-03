# Grids — Refero Style

- Refero URL: https://styles.refero.design/style/386ffc4a-f4a7-48c8-985b-df86b8612080
- Site URL: https://grids.obys.agency
- ID: 386ffc4a-f4a7-48c8-985b-df86b8612080
- Theme: light
- Industry: design
- Created: 2026-04-28T21:24:07.425Z
- Ranks: newest: 900, popular: 1105, trending: 1053

> Blueprint in Motion – a stark, interactive canvas where giant letterforms are the only dynamic elements.

## Description

Grids' visual style evokes the precision of an architectural drawing coming to life, with dynamic motion shaping static typography. The aesthetic is stark, relying on a monochrome palette and sharp geometric forms. Giant, highly tracked letterforms transform into interactive elements, giving the impression of blueprints being manipulated in real-time. Subtle shadows provide the only depth in an otherwise flat, canvas-like environment.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Primary page background, elevated card surfaces |
| Graphite Black | #010101 | neutral | Primary text color, bold headlines, core interactive elements like the central diamond |
| Concrete Gray | #f1f1f1 | neutral | Secondary background, subtle dividers, supporting text |
| Charcoal Text | #282828 | neutral | General body text, default text contrast on light backgrounds |
| Smoke Border | #c2c2c2 | neutral | Subtle card outlines, placeholder text |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| custom_40538 |  | 400 | 10px, 14px, 31px, 86px, 264px | 1.10, 1.14, 1.21, 1.30, 1.62, 1.64, 1.70 | Primary display font for all headings and large interactive text elements. Its geometric structure and varying letter-spacing contribute to the architectural, dynamic feel of the site. Critical for large, animating text. |
| -apple-system | system-ui | 400 | 16px | 1.00 | Fallback and utilitarian text for smaller labels and descriptive copy, ensuring readability despite the highly stylized main display font. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.7 | -0.42 |
| body-sm | 14 | 1.64 | -0.42 |
| body | 16 | 1 | 0 |
| subheading | 31 | 1.21 | -0.31 |
| heading | 86 | 1.14 | -3.27 |
| display | 264 | 1.1 | -10.56 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px"
  },
  "elementGap": "7px",
  "sectionGap": "40px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Standard Card

**Role:** Container for content, appearing as an overlay or distinct element.

Background is Canvas White (#ffffff). Features a subtle shadow: rgba(0, 0, 0, 0.24) 0px 1px 2px 0px. Border radius is 0px. Padding is not applied directly to the card itself (0px) but content layers within.

### Loading Indicator

**Role:** Visual cue for content loading states.

Text 'Loading...' uses custom_40538 font at 10px, Graphite Black (#010101).

### Primary Display Text

**Role:** Large, interactive headings and key messages.

Composed of individual letters or words using custom_40538 at sizes ranging from 31px up to 264px, with Graphite Black (#010101) or Charcoal Text (#282828). Features dynamic letter-spacing (e.g., -0.0420em) and animation capabilities.

### Utility Text

**Role:** Informational text like copyrights or small labels.

Uses -apple-system (system-ui) font at 16px, Charcoal Text (#282828).

## Do's

- Use Canvas White (#ffffff) for all primary page and card backgrounds to maintain a stark, clean canvas aesthetic.
- Apply Graphite Black (#010101) for all main headlines and significant text elements, emphasizing strong contrast.
- Utilize custom_40538 for all headings and large textual components, embracing its geometric forms and dynamic letter-spacing for visual impact.
- Employ a 0px border radius for all cards and containers to enforce a sharp, angular aesthetic.
- Introduce depth only through subtle box-shadows like rgba(0, 0, 0, 0.24) 0px 1px 2px 0px for cards, avoiding heavy or colored shadows.
- Prioritize text as the main visual and interactive element, especially large, animated letterforms.
- Maintain generous spacing, with section gaps of 40px and dynamic element spacing derived from the base unit of 4px.

## Don'ts

- Do not use highly saturated or chromatic colors for any UI elements; maintain a strict monochrome palette.
- Avoid rounded corners on any primary UI components; the design language relies on sharp angles and geometric precision.
- Do not introduce complex gradients or background images; surfaces should be solid colors.
- Do not use heavy or numerous drop shadows, as subtle elevation is preferred.
- Avoid decorative icons or illustrations that are not integral to content; focus on typographic and geometric forms.
- Do not deviate from the distinct letter-spacing values provided for custom_40538, as they are crucial to its visual identity.
- Do not introduce highly varied font weights; stick to the specified 400 weight for custom_40538 and -apple-system.

## Layout

The page operates on a full-bleed model, without a fixed max-width, allowing elements to extend to the viewport edges. The hero section is dominated by large, interactive text elements and geometric shapes (e.g., the rotating diamond) appearing floating on the Canvas White background. Sections have a spacious rhythm, with alternating white and light gray backgrounds indicated by the 'Concrete Gray' and 'Canvas White' surfaces, creating visual breaks. Content is arranged with a strong emphasis on horizontal and vertical lines, reminiscent of a technical drawing grid, and features large, often animated, typography. The navigation appears to be a minimal top bar, possibly a single line indicating progress or sections, reinforcing the technical blueprint aesthetic. The overall density is spacious, giving elements ample room to breathe and animate.

## Imagery

The design predominantly uses typography as its core visual element, with a strong focus on large, animated letterforms. There are no traditional photographs, illustrations, or product screenshots. Icons are minimal, represented by simple geometric shapes (like the central rotating black diamond) or basic system icons. The visual language is purely abstract and interactive, using text and simple forms to convey meaning and create a dynamic experience. Imagery is effectively replaced by animated, oversized text that functions as both content and decorative element.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(0, 0, 0, 0.24) 0px 1px 2px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Awwwards | Similar focus on experimental typography and interactive, minimalist web experiences. |
| Future Fonts | Emphasizes typography as a primary visual and interactive element, showcasing letterforms dynamically. |
| Locomotive | Known for highly interactive, motion-driven websites with stark aesthetics and engaging scroll-based narratives. |
| Bruno Simon's Portfolio | Playful, interactive, and experimental use of 3D geometry and motion on a minimalist canvas. |

## Custom Sections

### Motion Philosophy

Motion is intrinsic to the Grids system, transforming static elements into interactive experiences. Transitions predominantly use an 'ease' timing function over 0.2s for subtle interactions, while larger, more dramatic transformations (like those affecting major type elements) utilize extended durations up to 8.4s. The core animation strategy focuses on 'opacity' and 'transform' properties, specifically to animate text and geometric shapes, reflecting the idea of components assembling or disassembling on a digital blueprint. Named animations, such as 'animation_1_1', suggest a highly choreographed and deliberate use of motion across the site.

### Agent Prompt Guide

**Quick Color Reference:**
- Text: #010101 (Graphite Black)
- Background: #ffffff (Canvas White)
- Secondary Background: #f1f1f1 (Concrete Gray)
- Body Text: #282828 (Charcoal Text)
- Card Shadow: rgba(0, 0, 0, 0.24)

**3-5 Example Component Prompts:**
1. Create a large hero heading for 'GRIDS'. Each letter should be a separate animated element, using custom_40538 font at 264px size, weight 400, color Graphite Black (#010101), with letter-spacing -10.56px. The overall background should be Canvas White (#ffffff).
2. Build a footer section with the text 'Obys Agency ©2021'. Use -apple-system font at 16px, weight 400, color Charcoal Text (#282828). The background of this section should be Concrete Gray (#f1f1f1).
3. Design a content card. It should have a Canvas White (#ffffff) background, 0px border-radius, and a box-shadow of rgba(0, 0, 0, 0.24) 0px 1px 2px 0px. Ensure no internal padding, allowing content to manage its own spacing.
4. Implement a loading indicator with the text 'Loading...' using custom_40538 font at 10px, weight 400, Graphite Black (#010101), positioned at the bottom left of the viewport.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777411426177-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777411426177-thumb.jpg |
