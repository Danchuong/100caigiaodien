# PLATFORM — Refero Style

- Refero URL: https://styles.refero.design/style/81507860-e43d-4c50-b371-7267af9a914b
- Site URL: https://www.platformart.com
- ID: 81507860-e43d-4c50-b371-7267af9a914b
- Theme: light
- Industry: design
- Created: 2026-04-30T03:14:12.555Z
- Ranks: newest: 200, popular: 942, trending: 879

> monochromatic gallery exhibition

## Description

PLATFORM employs a high-contrast, minimalist gallery style, reminiscent of exhibition space. The visual system relies heavily on stark black and white, creating a strong editorial feel where artwork takes center stage. Typography is reserved and precise, with tight tracking. Components are ghosted or outlined, never interfering with content, maintaining a sense of refinement and directness.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button backgrounds, default text color for inverse elements |
| Ink Black | #000000 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| MediumLLWeb | system-ui, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol' | 400 | 12px, 15px, 20px, 48px, 72px | 1.15 | Body copy, captions, links, and secondary navigation items. Its regular weight ensures readability while maintaining the understated tone. |
| MediumLLWeb | system-ui, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol' | 500 | 12px, 15px, 20px, 48px, 72px | 1.00, 1.20 | Headings and spotlight titles. The medium weight combined with generous letter-spacing creates an open, editorial display quality, asserting presence without typical bolding. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.15 |  |
| body-sm | 15 | 1.15 |  |
| body | 20 | 1.15 |  |
| body-lg | 48 | 1.15 |  |
| heading-sm | 72 | 1.15 |  |

## Spacing & Shape

```json
{
  "radius": {
    "all": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "72px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button

**Role:** Interactive elements within the top navigation and inline actions.

Transparent background, Ink Black (#000000) text, no border or padding, font MediumLLWeb weight 400. This minimal styling makes navigation blend seamlessly with the content.

### Text Button

**Role:** Call to action for secondary actions or text-based prompts.

Background transparent, Ink Black (#000000) text (MediumLLWeb weight 400), 8px top/bottom padding, 13px left/right padding, with a 1px bottom border on interaction for subtle emphasis. No border radius.

### Artwork Card

**Role:** Displaying individual artworks in grid layouts.

Transparent background with a 1px Ink Black (#000000) border. No padding within the card itself as artwork fills the space. All corners are sharp (0px radius). Artwork information appears directly below the image using MediumLLWeb, weight 400.

### Text Input

**Role:** Form fields for user input.

Transparent background, Ink Black (#000000) text and border, 10px padding on all sides. No border radius. The simple, sharp input field matches the overall aesthetic.

## Do's

- Prioritize Ink Black (#000000) for text and primary UI interactions against Canvas White (#ffffff) backgrounds to maintain high contrast and sophistication.
- Use MediumLLWeb weight 500 for all large headings (48px, 72px) with the specified letter-spacing to create an open and editorial feel.
- Maintain a strict 0px border-radius for all components and elements; rounded corners are not part of this visual language.
- Employ ghost or outlined styles for interactive elements, using Ink Black (#000000) for borders or text, to preserve content as the primary focus.
- Utilize 'elementGap' of 10px for vertical spacing between related content blocks for a compact, intentional rhythm.
- Ensure all interactive elements have hover effects that subtly highlight their interactive nature within the black and white palette.
- Keep backgrounds for all major sections and components as Canvas White (#ffffff) or transparent, allowing content to define visual interest.

## Don'ts

- Do not introduce strong chromatic colors into the core UI; color should only appear within artwork or imagery, not structural elements.
- Avoid heavy drop shadows or complex elevation; mimic the flatness of a printed page or gallery wall.
- Do not use typography weights heavier than MediumLLWeb 500; the brand's authority comes from thoughtful spacing and elegant forms, not visual weight.
- Refrain from using padding within cards displaying artwork; the art should bleed to the edge of its boundary.
- Do not vary from the established letter-spacing values for MediumLLWeb; precise tracking is a signature of this system.
- Avoid introducing rounded corners on any UI element; the design maintains a sharp, architectural edge.
- Do not use generic system fonts when MediumLLWeb (or its defined substitutes) should be used; font choice is critical to brand identity.

## Layout

The page primarily uses a full-bleed layout for the hero section, with a centered headline and subordinate text over a dark, textural background. Subsequent sections often feature a limited max-width for textual content, contrasting with grid-based image displays that utilize the full horizontal space. Content is arranged in alternating sections, typically with consistent vertical spacing. Text blocks tend to be centered or left-aligned within their containers, while image grids align to the overall page structure. Navigation is a minimalist top bar, with prominent 'PLATFORM:' branding and subtle text links.

## Imagery

This site predominantly uses large, high-resolution imagery showcasing fine art. Images are typically full-bleed within their sections or tightly cropped and contained within a 1px Ink Black (#000000) border, mimicking a framed piece. There is no usage of abstract graphics, 3D renders, or heavily treated photography. Icons are minimal, outlined Ink Black (#000000) pictograms, serving purely functional roles like search or user profile. The visual density is high on imagery, allowing the artwork to speak for itself, with explanatory text kept concise and positioned carefully around the visuals.

## Similar Brands

| Business | Why |
| --- | --- |
| Artnet | Shares a monochromatic color scheme with stark black and white for UI, prioritizing artwork display. |
| Saatchi Art | Employs a clean, minimalist layout with prominent artwork imagery and subtle, ghosted navigation. |
| Paddle8 | Features a high-contrast aesthetic with sharp edges and a focus on editorial typography for art listings. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference**
text: #000000
background: #ffffff
border: #000000
accent: none observed
primary action: no distinct CTA color

**3-5 Example Component Prompts**
1. Create a `Ghost Navigation Button` named 'Shop' with 'MediumLLWeb' font, weight 400, color '#000000'.
2. Create an `Artwork Card` displaying an image placeholder. This card should have a 1px border of '#000000' and '0px' border-radius. Below the image, include two lines of `MediumLLWeb` text, weight 400, color '#000000'.
3. Create a `Text Input` field with '10px' padding, '0px' border-radius, background color transparent, and 1px border with color '#000000'. Placeholder text should be 'MediumLLWeb' weight 400, color '#000000'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518830331-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518830331-thumb.jpg |
