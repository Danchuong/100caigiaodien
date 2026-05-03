# Ka-ra — Refero Style

- Refero URL: https://styles.refero.design/style/315660d3-36f4-4458-8148-1317fc909e8b
- Site URL: https://www.ka-ra.studio
- ID: 315660d3-36f4-4458-8148-1317fc909e8b
- Theme: light
- Industry: design
- Created: 2026-04-30T01:31:03.765Z
- Ranks: newest: 583, popular: 1131, trending: 1099

> Gallery white, framed bronze.

## Description

Ka Ra Studio embodies an austere gallery aesthetic, blending raw product display with minimalist typography and a singular, muted accent color. The visual system is defined by a vast expanse of white space, creating a quiet backdrop that lets the craftsmanship of the products stand out. Typography is understated yet precise, using a custom serif for titles and a system sans-serif for body text, maintaining legibility without competing with the visuals. The design prioritizes space and a restrained palette, with interactive elements subtly framed rather than highlighted, creating a sense of calm and considered presentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #FFFFFF | neutral | Page background, primary surface for content |
| Text Black | #000000 | neutral | Primary text color for body, headings, and functional icons |
| Border Fog | #E5E5E5 | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Muted Bronze | #674A1D | brand | Outlined action borders, collection titles, and secondary informational text – a warm, earthy tone that indicates interaction or hierarchy |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| A B C Laica | Playfair Display | 400 | 16px, 34px | 1.20, 1.50, 2.00 | Headlines and collection titles – its unique serif quality adds a touch of classic craftsmanship to functional text, eschewing heavy weights for refined presence. |
| -apple-system | system-ui | 400 | 15px | 1.65 | Body copy and informational text – a neutral, highly readable system font that recedes to prioritize content. |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "26px",
  "sectionGap": "67px",
  "cardPadding": "39px",
  "pageMaxWidth": null
}
```

## Components

### Info Link

**Role:** Subtle navigational or disclosure element.

Text in A B C Laica, weight 400, 16px, color Muted Bronze (#674A1D), with a 1px border in Border Fog (#E5E5E5) creating a soft, outlined pill shape on hover/focus.

### Collection Title

**Role:** Product or collection identifier.

Text in A B C Laica, weight 400, 34px, color Muted Bronze (#674A1D). No distinct background or border.

### Product View Link

**Role:** Call to action for viewing product details.

Text in A B C Laica, weight 400, 16px, color Muted Bronze (#674A1D), with a 1px border in Muted Bronze (#674A1D) on hover/focus, for a slightly more prominent outline than informational links.

### Copyright Text

**Role:** Legal and meta information.

Text in A B C Laica, weight 400, 16px, color Muted Bronze (#674A1D).

## Do's

- Prioritize Canvas White (#FFFFFF) as the dominant background color to maintain an expansive, airy feel.
- Use Text Black (#000000) for all main body text and standard headings for clear contrast.
- Apply Muted Bronze (#674A1D) as the primary accent for interactive borders, emphasized titles, and all link text.
- Frame interactive elements with thin, 1px borders in Border Fog (#E5E5E5) or Muted Bronze (#674A1D) rather than solid backgrounds.
- Maintain generous vertical spacing between sections (67px) to emphasize individual content blocks and product images.
- Utilize A B C Laica for all headings and emphasized textual elements to convey a handcrafted, artistic identity.
- Ensure -apple-system (or system-ui equivalent) is used for all descriptive body text for maximum clarity and unobtrusiveness.

## Don'ts

- Avoid using saturated or bright colors; the palette should remain muted and natural.
- Do not introduce heavy shadows or gradients; rely on space and subtle borders for definition.
- Refrain from using strong bold weights for typography; maintain an understated, elegant visual hierarchy through font family and size.
- Do not embed text directly onto product images; text overlays are not part of this visual system.
- Avoid dense information blocks; instead, disperse content with ample padding (39px) and element spacing (26px).
- Do not use highly decorative UI elements; form follows function with a bias towards visual silence.

## Similar Brands

| Business | Why |
| --- | --- |
| Frama | Shared use of stark white backgrounds, raw material focus, and understated typography to emphasize product form and texture. |
| B&B Italia | Similar high-end furniture presentation, employing generous white space and minimalist layouts to convey luxury and craftsmanship. |
| Muuto | Focus on clean product photography and a calm, spacious user interface, allowing products to be the visual hero. |

## Custom Sections

### Agent Prompt Guide

Create an Outlined Primary Action: Transparent background, #674a1d border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.

Example Component Prompts:
1. Create a header section: 'Ka Ra, Studio' in A B C Laica weight 400, 34px, color #674A1D. Centered. Below it, a line of body text in -apple-system weight 400, 15px, color #000000.
2. Design a product display grid: two columns, each containing a product image. Below each image, add a product title in A B C Laica weight 400, 16px, color #674A1D, followed by a '( View )' link in A B C Laica weight 400, 16px, color #674A1D, with a 1px border in #674A1D on hover. Use 67px sectionGap between grid and above content.
3. Create an informational link block: Text '( Info )' in A B C Laica weight 400, 16px, color #674A1D, with a 1px border in #E5E5E5. Apply 39px padding around the content within the block, and 26px margin-right to adjacent elements.
4. Generate a footer: Copyright text in A B C Laica weight 400, 16px, color #674A1D, centered. No background color, minimal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512623865-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512623865-thumb.jpg |
