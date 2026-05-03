# Philip Hugle — Refero Style

- Refero URL: https://styles.refero.design/style/48d0714a-7f0e-4b62-b297-1220a825454b
- Site URL: https://philiphugle.de
- ID: 48d0714a-7f0e-4b62-b297-1220a825454b
- Theme: light
- Industry: design
- Created: 2026-04-30T03:20:59.807Z
- Ranks: newest: 175, popular: 1255, trending: 1262

> Monochrome Architectural Print

## Description

Philip Hugle's visual system evokes the precision of a printed book combined with a stark, no-frills digital portfolio. It uses a strictly monochrome palette, with an emphasis on crisp black text against a white background, punctuated by thin black borders. Typography leans towards the classic and readable, while the layout maintains a high contrast, almost architectural feel with generous whitespace and a clear, linear flow.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Inkwell Black | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Canvas White | #ffffff | neutral | Page background, primary surface color |
| Project Background | #eeeeee | neutral | Secondary background for content sections or project cards, providing slight visual separation from the main page |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Georgia | serif | 400 | 16px | 1.30 | Body text, headings, links, and all content text. Its serifs lend a classic, readable quality to the minimalist interface. |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "16px",
  "pageMaxWidth": "705px"
}
```

## Components

### Project Card

**Role:** Displays individual project previews.

A minimalist container for project previews, featuring no background color, no border radius, and no box shadow. It utilizes 16px padding on all sides, allowing the content within to define its visual boundaries. The card is implicitly separated by sectioning with the `Project Background` color.

### Outlined Link

**Role:** Interactive text link, sometimes with a border.

Text links (like a primary action or contact information) are rendered in Inkwell Black. If serving as a more prominent interactive element, they receive a 1px solid Inkwell Black border and 16px padding, without a background or border radius, making them visually distinct yet subdued.

## Do's

- Prioritize readability with Georgia font set to 16px for all textual content.
- Maintain a clear visual hierarchy using Inkwell Black for all text against Canvas White or Project Background surfaces.
- Use 0px for all border-radius values, eliminating soft edges and maintaining a sharp, architectural aesthetic.
- Employ thin, 1px Inkwell Black borders for interactive elements requiring emphasis, such as links or calls to action.
- Apply 16px of padding consistently around content blocks and within components like Project Cards.
- Ensure generous vertical spacing between sections, aiming for a minimum of 64px to create an airy, uncrowded feel.
- Center all page content within a maximum width of 705px, except for full-bleed background sections, to maintain content focus.

## Don'ts

- Avoid using any colors outside of the defined monochrome palette of Inkwell Black, Canvas White, and Project Background.
- Do not introduce shadows or any form of elevation; the design relies on flat surfaces and minimal depth.
- Refrain from using varied font sizes or weights; Georgia 400 at 16px defines the entire typographic scale.
- Do not add any decorative elements or gradients; the aesthetic is strictly functional and content-focused.
- Avoid variable letter-spacing; all text uses normal letter-spacing, contributing to a print-like consistency.
- Do not use subtle tints or shades to create different surface levels; rely explicitly on Canvas White and Project Background.
- Never use rounded corners on any UI element; all shapes are strictly rectilinear.

## Layout

The page primarily uses a fixed-width, centered layout with a maximum content width of 705px, surrounded by generous whitespace. The hero section introduces a simple, stacked arrangement of a heading and paragraphs, followed by a linear presentation of projects. Project listings feature alternating `Project Background` sections, giving a subtle visual rhythm without hard dividers. Each project presents a screenshot alongside minimal descriptive text, maintaining a clean, editorial structure. Navigation is minimal, likely restricted to a footer with utility links.

## Imagery

The visual language is dominantly product screenshots or photographs, presented in a raw and contained manner, without any cropping or masking effects. The images are typically embedded within neutral grey backgrounds, suggesting a digital interface context. Photography appears to be varied, ranging from product-focused to environmental, with no consistent color treatment (some color, some grayscale). Icons are not prominently featured, suggesting a focus on content and typography over pictorial navigation or symbolism. Imagery serves as direct demonstration of work, not decorative atmosphere, keeping the content density moderate.

## Similar Brands

| Business | Why |
| --- | --- |
| Readability | Emphasizes clear, readable serif typography on a high-contrast background for an editorial feel. |
| Brutalist Garden | Uses a stark, functional, and monochrome design with a lack of decorative flourish and sharp edges. |
| One Page Love | Showcases a portfolio of work in a linear, scroll-based format without complex navigation or visual hierarchy outside of content blocks. |
| Minimal Gallery | Presents visual content with minimal UI ornamentation, allowing the work itself to be the primary focus. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a page header: text 'Philip Hugle, Frontend Designer' in Georgia 400 at 16px, #000000, line-height 1.3. Below it, two paragraphs of body text in the same style. The entire header should be on a #ffffff background with 64px padding-bottom.
2. Create a Project Card section: background #eeeeee, with a 16px padding on all sides. Within this section, place a Project Card that has no background, 0px border-radius, 16px padding. Inside, an image screenshot, and below it, text 'Jacobsens Sommerhuse' and a descriptive line, both in Georgia 400, 16px, #000000, line-height 1.3.
3. Create a footer: background #ffffff. Two textual links: 'Impressum' and 'Projektindex', both in Georgia 400, 16px, #000000, line-height 1.3. These links should have a 1px solid #000000 border, no border-radius and 16px padding. The footer should be centered within the 705px max-width.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519235170-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519235170-thumb.jpg |
