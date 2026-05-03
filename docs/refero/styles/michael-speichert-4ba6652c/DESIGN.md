# Michael Speichert — Refero Style

- Refero URL: https://styles.refero.design/style/4ba6652c-56f1-4bd5-9e2f-9b64a30d66a8
- Site URL: https://www.michaelspeichert.com
- ID: 4ba6652c-56f1-4bd5-9e2f-9b64a30d66a8
- Theme: dark
- Industry: design
- Created: 2026-04-30T03:47:44.113Z
- Ranks: newest: 63, popular: 1145, trending: 1193

> Black canvas, typographic drama

## Description

Michael Speichert's design system presents a stark, high-contrast experience, primarily leveraging monochromatic tones with an occasional deep indigo accent. Typography is central, using large, bold typefaces and precise letter-spacing to create focal points. The visual language emphasizes graphic impact over detailed imagery, with minimal adornment or complex components, focusing instead on strong textual communication.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #000000 | neutral | Page backgrounds, card surfaces, primary text for reversed content |
| Spectral White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Midnight Indigo | #4200ff | accent | Background for specific sections, providing a strong tonal shift against the primary black |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Plaid | Open Sans | 300 | 22px, 54px, 60px, 170px | 1.00, 1.06, 1.50 | Dominant headlines, hero text, and significant calls to action. The extremely light weight (300) for such large sizes is anti-conventional, creating an effect of authority through restraint rather than loudness. Consistent tight letter-spacing also contributes to its graphic impact. |
| system-ui | Helvetica Neue | 500 | 28px | 1.50, 2.29 | Secondary headings, body text, and general interface labels. This font offers high readability and a clean counterpoint to the more expressive Plaid font, maintaining an overall sharp typographic presence. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 28 | 1.5 | 0 |
| heading-sm | 54 | 1.06 | -0.02 |
| heading | 60 | 1.06 | -0.02 |
| display | 170 | 1 | -0.03 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "0px",
    "default": "4px"
  },
  "elementGap": "8px",
  "sectionGap": "50-60px",
  "cardPadding": "10px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive elements for navigation or secondary actions.

Completely transparent background, Spectral White (#ffffff) text and a 0px border. Padding is implicitly handled by content itself, giving a tight, text-focused interactive area. All corners are sharp (0px radius).

## Do's

- Prioritize text as the primary visual element; use typography to create hierarchy and visual interest.
- Maintain high contrast by pairing Spectral White (#ffffff) text with Absolute Zero (#000000) backgrounds.
- Use Plaid font for all prominent headlines and expressive text, with a fontWeight of 300.
- Apply negative letter-spacing for Plaid headlines as detected: -0.0300em at 170px, -0.0200em at 60px, -0.0100em at 54px.
- Utilize Midnight Indigo (#4200ff) sparingly as a background for sections requiring a distinct thematic shift.
- Ensure interactive elements like links and ghost buttons use Spectral White (#ffffff) text and borders on dark backgrounds.
- Use a default border-radius of 4px for any subtle container elements, but 0px for text links and buttons.

## Don'ts

- Avoid decorative imagery; if imagery is necessary, prioritize clean, functional representations or abstract graphics.
- Do not use complex shadow systems; elevation should be achieved through color shifts or typographic hierarchy.
- Refrain from using strong, saturated colors beyond Midnight Indigo; the palette is intentionally limited.
- Do not introduce rounded corners on primary interactive elements or text links; keep them sharp.
- Avoid dense, feature-heavy layouts; prioritize spaciousness and clear information architecture.
- Do not use default browser link styles; all links should adhere to Spectral White (#ffffff) text on dark backgrounds.
- Do not apply padding to ghost buttons; let the text content dictate sizing.

## Layout

The page primarily uses a full-bleed layout without a maximum content width, allowing textual elements to span the viewport or be intentionally constrained for visual impact. The hero section leverages large, rotated text directly on a black canvas to establish high-impact typographic drama. Sections typically follow a consistent vertical rhythm, with ample spacing (50-60px section gap) between blocks. Content arrangement is primarily stacked or uses a loose grid for client logos, centered or left-aligned. Navigation is minimal, implied through discrete text links.

## Imagery

The visual system relies heavily on typography as imagery. The few graphical elements are stark, high-contrast compositions of text on solid backgrounds. There are no photographs, illustrations, or product shots. Icons are not a prominent feature, and the overall density is text-dominant, with graphical elements (text itself) used for decorative atmosphere and branding.

## Similar Brands

| Business | Why |
| --- | --- |
| A24 | Shares a stark, high-contrast, text-dominant aesthetic with minimal imagery and a focus on bold typography. |
| Karlssonwilker inc. | Exhibits a similar experimental typographic approach, often using large, customized typefaces as primary visual elements. |
| Build in Amsterdam | Employs clean, dark-mode interfaces with strong typographic hierarchy, emphasizing content over decorative elements. |
| Instrument | Utilizes a sophisticated, often monochromatic or limited-color palette with a focus on large, impactful text and ample whitespace. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #ffffff
accent: #4200ff
primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section with a centered headline: Background Absolute Zero (#000000). Headline 'DESIGNER' using Plaid, 170px, weight 300, Spectral White (#ffffff), letter-spacing -0.0300em. Subtitle 'for web, identities & e-commerce' using system-ui, 28px, weight 500, Spectral White (#ffffff).
2. Create a client logo section: Background Absolute Zero (#000000). Section heading 'Client experience:' using system-ui, 28px, weight 500, Spectral White (#ffffff). Follow with a ghost button 'A24': text Spectral White (#ffffff), 0px radius, no background, 0px border. Layout these elements with an 8px elementGap between logos and a 50px sectionGap below the heading.
3. Create a descriptive text block within a Midnight Indigo (#4200ff) section: Text 'Amsterdam based senior experience designer & art director...' using system-ui, 28px, weight 500, Spectral White (#ffffff), lineHeight 1.5. Include a link 'Karlssonwilker inc.' using system-ui, 28px, weight 500, Spectral White (#ffffff), with a 0px border.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520849531-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520849531-thumb.jpg |
