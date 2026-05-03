# Play — Refero Style

- Refero URL: https://styles.refero.design/style/bf7b33f2-5fbd-49e8-aee7-ec67b6cb5ef4
- Site URL: https://play.space
- ID: bf7b33f2-5fbd-49e8-aee7-ec67b6cb5ef4
- Theme: light
- Industry: other
- Created: 2026-04-30T03:50:48.403Z
- Ranks: newest: 47, popular: 1079, trending: 1088

> monochromatic text canvas

## Description

Play offers a content-first experience, prioritizing stark readability through a minimal achromatic palette. Text is the primary visual element, set against a pristine white background with discreet use of mid-gray for secondary headings. The design relies on direct typography and ample negative space to convey information, with a single muted blue acting as the only accent for interactive elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Text Primary | #333333 | neutral | Primary body text, bold headings, borders, and UI accents where high contrast is needed |
| Text Secondary | #8a8a8a | neutral | Muted subheadings and decorative textual elements, providing subtle visual hierarchy |
| Link Blue | #0000ee | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 700 | 14px, 19px, 20px, 21px, 32px | 0.95, 1.13, 1.20, 1.43, 1.63 | The primary typeface for all textual content, including headings and body. Its varied weights support a subtle typographic hierarchy, used for primary headlines in 700 and body text in 400. |
| Arial | Helvetica Neue, Helvetica, sans-serif | 400 | 14px | 1.43 | Used for specific auxiliary text elements not defined by the primary type scale. It exists as a fallback or for legacy content integration, not a core brand font. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.43 |  |
| subheading | 19 | 1.43 |  |
| heading | 21 | 1.2 |  |
| display | 32 | 0.95 |  |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "25px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Do's

- Prioritize text content against white(#FFFFFF) or near-white(#FDFDFD) backgrounds.
- Use Text Primary (#333333) for all primary headings and body paragraphs.
- Employ Text Secondary (#8a8a8a) for subtle subheadings or descriptive text that needs less emphasis.
- Maintain generous vertical spacing between text blocks, using 25px section gaps for major breaks and 10px for minor element spacing.
- Ensure all interactive links are styled using the browser default Link Blue (#0000ee) for immediate recognition.
- Keep borders for elements minimal, using Text Primary (#333333) for a subtle but present definition.

## Don'ts

- Avoid introducing new chromatic colors into the UI beyond the Link Blue without explicit brand direction.
- Do not use elevation or shadows; the design relies on flat, direct presentation.
- Refrain from using bold typography (#333333, weight 700) for standard body text if it's not a heading, as it disrupts the content-first flow.
- Do not introduce complex component structures; stick to essential text and link treatments.
- Avoid imagery or graphical elements that distract from the typographic focus.

## Layout

The page uses a maximum content width centered model, though the exact max-width is not defined in tokens. The hero section features a centered headline and subheading over a stark white background. Content sections flow vertically with consistent vertical spacing (25px for major breaks, 10px for minor elements). The layout is primarily a single column of text with links embedded, emphasizing readability and direct communication.

## Imagery

The site is entirely text-dominant, with no visible imagery. The visual language is pure UI, focusing on typography and content instead of graphics or photography. Icons, if present, would likely be minimal and outlined to maintain consistency.

## Similar Brands

| Business | Why |
| --- | --- |
| Medium | Focus on high-contrast text against a clean white background, favoring readability over decorative elements. |
| Substack | Minimalist layout with a strong emphasis on long-form content, using a restricted color palette for core UI. |
| Notion (minimal views) | Heavy reliance on text and subtle gray variations for hierarchy, eschewing strong brand colors for a 'work-focused' feel. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #333333
background: #FFFFFF
border: #333333
accent: #0000ee
primary action: no distinct CTA color

Example Component Prompts:

1. Create a primary headline section: "A new path for Playspace" (Text Primary, Inter 700, 32px, lineHeight 0.95), followed by a subheading "Playspace is now part of Google Workspace." (Text Secondary, Inter 400, 19px, lineHeight 1.43). Ensure a 25px gap between these elements.

2. Design a standard body paragraph: "Born of necessity, Playspace is a pandemic baby. Prior to lockdown, our team relied on physical space." (Text Primary, Inter 400, 14px, lineHeight 1.63). Ensure a 10px gap to the next paragraph.

3. Create a functional text link: "Mailbox" (Link Blue, Inter 400, 14px, lineHeight 1.63) embedded within a body paragraph. Ensure it contrasts clearly with the surrounding Text Primary.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521031322-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521031322-thumb.jpg |
