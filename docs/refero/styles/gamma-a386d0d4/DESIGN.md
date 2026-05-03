# Gamma — Refero Style

- Refero URL: https://styles.refero.design/style/a386d0d4-01f1-4ec3-80ae-d505075d83ca
- Site URL: https://gamma.app
- ID: a386d0d4-01f1-4ec3-80ae-d505075d83ca
- Theme: light
- Industry: ai
- Created: 2026-01-26T10:38:03.000Z
- Ranks: newest: 1271, popular: 198, trending: 164

> Serene Cloud Sanctuary: A single white card floats effortlessly within a tranquil, sky-blue gradient, cradled by soft, cartoon-like clouds.

## Description

This design system evokes a sense of airy calm and trust, like a quiet moment before a significant event. The pervasive light blue gradient creates an open, optimistic sky-like background. Visual weight is concentrated in the central card with its crisp borders and soft shadows, making the core interaction feel grounded yet gently presented. Typography is minimal and direct, serving the primary purpose of clear communication without visual embellishment.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Gamma Blue | #002253 | brand | Brand text, primary headings, interactive elements. Its deep hue provides strong contrast against light backgrounds, signaling importance and trust. |
| Sky Gradient | #c6e6fa | brand | Page background — creates a soft, expansive, and optimistic atmosphere. |
| Cloud White | #ffffff | neutral | Primary surface color for cards and key content areas, providing a clean canvas for information. |
| Coal Black | #000000 | neutral | Most body text and secondary headings, ensuring high readability and a direct tone. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| PPMori | Inter | 500 | 16px | 1.50 | Primary body text and links – a slightly thicker weight for standard text gives substance without heaviness. The 'kern' feature implies careful typographic detailing for improved spacing. |
| ESBuild | Roboto, sans-serif | 500 | 30px | 1.20 | Main headings and key brand elements. Its specific 'ss02' feature suggests a distinct, custom glyph style, likely for branding impact, providing a modern and clear voice at larger sizes. |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "fields": "12px",
    "buttons": "12px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "32px",
  "pageMaxWidth": null
}
```

## Components

### Centered Content Card



### Status / Alert Banner



### Button Group



### Centered Content Card

**Role:** Contains focal content or interaction points.

A white card with a 12px border-radius, centered on the page. Uses 32px internal padding on all sides, creating ample breathing room for content. Text elements inside have 8px or 20px vertical spacing between them.

### Main Heading

**Role:** Introduces sections or key messages.

Uses ESBuild font at 30px, weight 500, with a 1.2 line height. Color is Coal Black (#000000), providing high contrast.

### Body Text

**Role:** Standard informational text.

Uses PPMori font at 16px, weight 500, with a 1.5 line height. Color is Coal Black (#000000).

### Link Text

**Role:** Interactive text elements.

Uses PPMori font at 16px, weight 500, with a 1.5 line height. Color is Gamma Blue (#002253), clearly differentiating it as interactive.

### Loading Indicator Region

**Role:** Shows background processing status.

A horizontal arrangement of an animated spinner, 'Verifying...' text (PPMori, 16px, #000000), and a Cloudflare logo, implying external background service activity.

## Do's

- Use 'Sky Gradient' (linear-gradient(to top, rgb(255, 255, 255), rgb(198, 230, 250))) as the primary page background to maintain the airy, optimistic feel.
- Apply a 12px border-radius to all card-like containers and interactive elements for a consistent soft, rounded edge.
- Prioritize PPMori font for all body text at 16px font-size and a 1.5 line-height, using weight 500 for clear readability.
- Employ ESBuild font at 30px font-size and weight 500 for main headings to establish clear visual hierarchy and brand voice.
- Utilize 32px padding within all primary content containers to ensure sufficient whitespace and prevent visual clutter.
- Use Gamma Blue (#002253) exclusively for interactive elements like links and key headings to guide user attention.
- Maintain high contrast ratios with text (e.g., #000000 on #ffffff, #002253 on #ffffff) for optimal accessibility (AAA level).

## Don'ts

- Avoid using harsh or highly saturated colors that would disrupt the calming, light aesthetic.
- Do not introduce sharp corners or radii other than 12px on elements intended to be visually grouped or interacted with.
- Refrain from using thin font weights that might compromise readability against the subtle background gradient.
- Do not deviate from the specified font families (PPMori, ESBuild) or their assigned weights/sizes for core text elements.
- Do not use dark backgrounds for main content areas; maintain Cloud White (#ffffff) for card surfaces.
- Avoid excessive use of shadows or complex visual effects that would contradict the clean and light presentation.
- Do not introduce additional brand or accent colors that are not Gamma Blue (#002253), to preserve the focused palette.

## Imagery

The site uses minimal abstract graphics. Specifically, the background features soft, pastel pink and blue 3D cloud-like shapes that appear to float, creating a dreamy and friendly atmosphere. These are decorative and atmospheric, lending to the overall sense of calm and approachability. The only other visual element is a small product/brand logo (Cloudflare) within a functional UI element, treated as an icon, not an illustrative feature. The design is heavily text-dominant with visuals serving purely as aesthetic framing.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Soft, welcoming gradients and clean, minimal content blocks that prioritize function yet feel approachable. |
| Notion | Emphasis on clear typography and structured information presentation within light-themed, bordered content areas. |
| Linear | High contrast dark text on light backgrounds, combined with functional, understated UI elements and subtle visual branding. |
| Calm | Uses soft, gradient backgrounds and a sense of spaciousness to create a serene and focused user experience. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #000000
- Background: linear-gradient(to top, #ffffff, #c6e6fa)
- CTA/Accent: #002253
- Card Surface: #ffffff
- Border/Outline: #000000 (though used sparingly for definition)

### Example Component Prompts
1. Create a centered content card: background #ffffff, border-radius 12px, internal padding 32px. Add a headline 'Just a moment...' using ESBuild font 30px weight 500 #000000. Below it, add body text 'Verifying...' using PPMori font 16px weight 500 #000000. Ensure 20px vertical gap between headline and body text, and 8px between 'Verifying...' and an inline Cloudflare logo.
2. Design a primary link: text 'Click Here' using PPMori font 16px weight 500 #002253, with normal letter-spacing and 1.5 line-height. Ensure it has the 'kern' font feature enabled.
3. Implement the page background: a CSS linear gradient (to top, #ffffff, #c6e6fa) with soft 3D cloud illustration elements positioned to the sides and bottom, maintaining the airy feel. No specific dimensions for clouds, just general placement.
4. Create a loading text element: PPMori font, 16px, weight 500, color #000000, with the text 'Verifying...' and an accompanying small animated spinner icon to its left.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923775399-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923775399-thumb.jpg |
