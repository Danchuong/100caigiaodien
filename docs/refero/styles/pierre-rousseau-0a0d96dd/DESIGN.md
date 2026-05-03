# Pierre Rousseau — Refero Style

- Refero URL: https://styles.refero.design/style/0a0d96dd-25bf-4747-836c-33663360da54
- Site URL: https://pierrerousseau.info
- ID: 0a0d96dd-25bf-4747-836c-33663360da54
- Theme: light
- Industry: design
- Created: 2026-04-30T01:53:58.233Z
- Ranks: newest: 495, popular: 1169, trending: 1136

> monochrome digital canvas, with precise typographic elements

## Description

Pierre Rousseau manifests a stark, conceptual interface, operating like a digital gallery for sonic art. Its sparse monochrome canvas is punctuated by precise geometric typography and a singular, vivid blue accent for interactive elements, which acts as a focused highlight against the otherwise understated aesthetic. The overall impression is one of minimalist precision, emphasizing content through its deliberate presentation rather than decorative flourishing.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Ice | #dddddd | neutral | Page backgrounds, large inactive UI surfaces |
| Midnight Ink | #000000 | neutral | Primary text, borders for structural elements, emphasis |
| Electric Blue | #0000ff | accent | Interactive elements, outlined link borders, active text states — a vibrant focal point against an achromatic base |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| LL Mono Book Web | Space Mono | 400, 700 | 13px | 1.00, 1.30 | Body text, navigation links, metadata, and general content where legibility and a consistent monospace aesthetic are key |
| Apato | Oxanium | 400 | 124px | 0.80 | Large, decorative headlines and key navigational elements, creating a distinctive, highly stylized visual identity with its low line height for tight stacking |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| display | 124 | 0.8 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "13px",
  "sectionGap": "",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Main Navigation Link

**Role:** Primary navigational elements and section titles

Uses 'Apato' at 124px weight 400 for a large, impactful statement. Default text is Midnight Ink (#000000). Active or hovered states are indicated by an Electric Blue (#0000ff) outline or background, with a tight lineHeight of 0.8 to stack text closely.

### Body Text Block

**Role:** Informational paragraphs and descriptions

Set in 'LL Mono Book Web' at 13px weight 400 with a lineHeight of 1.3. Text color is Midnight Ink (#000000). Features a subtle letterSpacing of 0.03em for a precise, legible feel.

### Info Link

**Role:** External links and contact information

Rendered in 'LL Mono Book Web' at 13px weight 400, with an Electric Blue (#0000ff) color for both text and an implied border upon interaction (like underline or highlight). Has a lineHeight of 1.0.

### Content Wrapper

**Role:** Container for content sections

A div or section element with a subtle Canvas Ice (#dddddd) background. Features internal padding of 6px on top and left, 5px on right, and 27px on bottom, creating asymmetric visual tension. All borders are sharp at 0px radius.

## Do's

- Prioritize a minimalist aesthetic; use Canvas Ice (#dddddd) for primary backgrounds and Midnight Ink (#000000) for all primary text and structural borders.
- Introduce Electric Blue (#0000ff) sparingly, exclusively for interactive elements like links and hover states, to ensure high visual impact.
- Employ 'Apato' at 124px weight 400 for all large, statement headlines and main navigation entries, ensuring a lineHeight of 0.8 for a dense, architectural look.
- Use 'LL Mono Book Web' at 13px weight 400 for all body text and secondary information, distinguishing it with a 0.03em letter-spacing and 1.3 lineHeight.
- Maintain sharp, 0px border radii across all elements; rounded corners are not part of this visual vocabulary.
- Utilize a base spacing unit of 6px; apply 13px for general element gaps and 18px for vertical section spacing.
- Ensure all interactive elements, particularly links, are clearly distinguishable with Electric Blue (#0000ff), often presented as an outlined border rather than a filled background.

## Don'ts

- Avoid superfluous gradients, shadows, or complex textures; stick to solid colors and stark contrasts.
- Do not use generic system fonts; 'LL Mono Book Web' and 'Apato' define the typographic identity.
- Refrain from introducing additional saturated colors; Electric Blue (#0000ff) is the sole accent color.
- Do not use rounded corners; all interface elements should maintain sharp, 0px radii.
- Avoid verbose text or dense paragraphs; content should be presented concisely, often in list format or short statements.
- Do not break the strict monochromatic palette with imagery; stick to abstract graphics and text-based visuals.
- Do not deviate from the specified Apato line height of 0.8 for headlines; this low value is critical to the visual identity.

## Layout

The page employs a full-bleed layout, taking up the entire viewport without a fixed max-width. The hero section features extremely large, highly stylized 'Apato' typography (124px) for the brand name, arranged in a custom grid-like fashion that dominates the left half of the screen. This typographic hero establishes the site's unique visual identity immediately. Content sections that follow maintain a strong left alignment. Vertical rhythm is governed by 18px section gaps and 13px element gaps, creating a comfortable yet precise density. Navigation elements are integrated directly into the page content, often as large, interactive typographic blocks, rather than a conventional top bar or sidebar. The layout is unconventional, prioritizing visual impact and artistic expression over standard information hierarchy, leading to a text-dominant, almost graphic design as content approach.

## Imagery

The site's visual language is purely typographic and conceptual. There are no photographs, illustrations, or product screenshots. Imagery is created through the stylized interplay of geometric font forms, acting as decorative elements. Iconography is also conceptual, represented by asterisk-like symbols that are part of the 'Apato' font or character set, integrated into the larger typographic elements.

## Similar Brands

| Business | Why |
| --- | --- |
| B&O (Bang & Olufsen) | Stark, monochrome aesthetic with highly stylized typography and minimal use of accent color to denote interaction or brand focus. |
| Certain typeFoundries' sites (e.g., Vulf) | Experimental, large-scale typography as primary visual elements, often with a grid-like or modular layout and strong black/white contrast. |
| Electronic music artist portfolios | Conceptual, minimal visual style, often monochromatic, with strong emphasis on unique typography and interactive subtlety. |
| Daniel Buren Estate | Strict adherence to a limited palette and geometric precision, often with a single repetitive visual motif or conceptual element. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #dddddd
border: #000000
accent: #0000ff
primary action: #0000ff (outlined action border)

Example Component Prompts:
1. Create a large navigational heading: 'Apato' at 124px, weight 400, color #000000, lineHeight 0.8. On hover, change text color to #0000ff and add a 1px border of #0000ff around the text block.
2. Design a standard body text paragraph: 'LL Mono Book Web' at 13px, weight 400, color #000000, lineHeight 1.3, letterSpacing 0.03em. Apply a 13px bottom margin.
3. Implement an informational link: 'LL Mono Book Web' at 13px, weight 400, color #0000ff, lineHeight 1.0, letterSpacing 0.03em. Use a 6px left padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514023511-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514023511-thumb.jpg |
